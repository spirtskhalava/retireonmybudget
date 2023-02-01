<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Collection;

class PlanStripe extends BasePlan
{
    use HasFactory;

    private static $stripeClient = null;

    private $productStripe;

    private $selectedPrice;

    private $paymentMethod;

    private $coupon;

    private $validPromotionCode = false;

    private static function createStripeClient(){
        if (self::$stripeClient === null) {
            self::$stripeClient = new \Stripe\StripeClient(
                Config::get('stripe.stripe_secret')
            );
        }
    }

    public function __construct($planId = null)
    {
        self::createStripeClient();
        if($planId != null){
            $this->productStripe = self::$stripeClient->products->retrieve(
                $planId,
                []
            );
        }
    }

    public function setProductStripeByPriceId($priceId){
        self::createStripeClient();
        $price = $this->retrieveFromStripePriceById($priceId);
        $this->productStripe = self::$stripeClient->products->retrieve(
            $price->product,
            []
        );
        $this->selectedPrice = $price;
    }

    public function getName(){
        return $this->name !== null ? $this->name : $this->productStripe->name;
    }

    public function getDescription(){
        return $this->description !== null ? $this->description : $this->productStripe->description;
    }

    public static function getAllPlans() : Collection{
        self::createStripeClient();
        $plans = self::$stripeClient->products->all(['active' => true]);
        return self::convertStripeProductsToCollection($plans, self::$stripeClient);
    }

    private static function convertStripeProductsToCollection($stripePlanCollection, $stripeClient) : Collection{
        $plansCollection = [];
        foreach ($stripePlanCollection as $plan) {
            $price = $stripeClient->prices->all(['product' => $plan->id]);
            $planBase = new PlanStripe();
            $planBase->attributes['price_id'] = $price->data[0]->id;
            $planBase->name = $plan->name;
            $planBase->description = $plan->description;
            $planBase->monthlyAmount = $price->data[0]->unit_amount_decimal/100;
            $plansCollection[] = $planBase;
        }
        return collect($plansCollection);
    }

    public function setSelectedPriceById($priceId){
        $this->selectedPrice = self::$stripeClient->prices->retrieve(
            $priceId,
            []
        );
    }

    public function getSelectedPrice(){
        return $this->selectedPrice;
    }

    public function setPaymentMethod($paymentMethod){
        if($this->isPaidPlan()){
            $this->paymentMethod = $paymentMethod;
        }else{
            $this->paymentMethod = null;
        }
    }

    public function getPaymentMethod(){
        return $this->paymentMethod;
    }

    public function setCouponFromPromotionCode($promotionCode){
        if($promotionCode !== null && $promotionCode !== ''){
            $this->coupon = $this->getStripeCouponFromPromotionCode($promotionCode);
        }
    }

    public function getCoupon(){
        return $this->coupon;
    }

    private function getStripeCouponFromPromotionCode($promotionCode) {
        $allCodes = $this->retrieveFromStripeAllActivePromotionCodes();
        foreach ($allCodes as $code) {
            if($code->code == $promotionCode && $code->coupon->valid && $this->isValidCouponForProduct($code->coupon)){
                $this->validPromotionCode = true;
                return $code->coupon;
            }
        }
        $this->validPromotionCode = false;
        return null;
    }

    public function isValidPromotionCode(){
        return $this->validPromotionCode;
    }

    private function retrieveFromStripeAllActivePromotionCodes() : array {
        $answer = self::$stripeClient->promotionCodes->all(['active' => true]);
        if(isset($answer->data)){
            return $answer->data;
        }else{
            return [];
        }
    }

    private function isValidCouponForProduct($coupon) : bool {
       $productIds = self::$stripeClient->coupons->retrieve($coupon->id, ['expand' => ['applies_to']])->applies_to->products;

       foreach ($productIds as $productId) {
            if($this->productStripe->id == $productId){
                return true;
            }
       }
       return false;
    }

    public function retrieveFromStripePriceById($priceId){
        return self::$stripeClient->prices->retrieve(
            $priceId,
            []
        );
    }

    public function isValidPlanPaymentMethodForSelectedPrice() : bool{
        return (($this->paymentMethod != null) || ($this->paymentMethod == null && $this->selectedPrice->unit_amount == 0));
    }

    public function isPaidPlan() : bool {
        if($this->selectedPrice != null && $this->selectedPrice->unit_amount != 0){
            return true;
        }else{
            return false;
        }
    }
}
