<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('send-contact', [HomeController::class, 'contact']);
Route::get('testimonial', [HomeController::class, 'testimonial']);
Route::get('testimonials', [HomeController::class, 'testimonials']);
Route::get('lotto-insert', [HomeController::class, 'insertData']);
Route::get('fantasy', [HomeController::class, 'fantasy']);

Route::get('about-us', function () {
    return view('pages.aboutme');
});

Route::get('subscription-plans', function () {
    return view('pages.plans');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('faq', function () {
    return view('pages.faq');
});

Route::get('terms-use', function () {
    return view('pages.termsuse');
});

Route::get('privacy-policy', function () {
    return view('pages.privacypolicy');
});

Route::get('experts', function () {
    return view('pages.comingsoon');
});
Route::get('businesses', function () {
    return view('pages.comingsoon');
});

use App\Http\Controllers\NumbeoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConnectPeopleController;

Route::get('compare', [NumbeoController::class, 'index'])->name('compare');
Route::get('search-city', [NumbeoController::class, 'searchCity']);
Route::get('save-compare-selection', [NumbeoController::class, 'saveCitiesSelection']);
Route::get('delete-compare-selection', [NumbeoController::class, 'deleteSelection']);
Route::get('selection', [NumbeoController::class, 'getSelection']);
Route::get('selections', [NumbeoController::class, 'getSelections']);
Route::get('cool-people', [ConnectPeopleController::class, 'index']);
Route::get('search-cool-people', [ConnectPeopleController::class, 'search']);
Route::get('cities', [ConnectPeopleController::class, 'getCities']);
Route::get('hobbies', [ConnectPeopleController::class, 'getHobbies']);
Route::get('languages', [ConnectPeopleController::class, 'getLanguages']);
Route::post('validateUser', [UserController::class, 'validateUser']);

//Api
Route::get('numbeo-cities', [NumbeoController::class, 'getNumbeoCities']);
Route::get('numbeo-cities-data', [NumbeoController::class, 'getNumbeoCitiesPricesData']);

Route::resource('users', UserController::class)->only([
    'edit','update'
])->middleware('auth');

// For Stripe
Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal();
})->middleware('verified')->name('ManageSubscriptionFromStripe');

// Chat
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessagesController;

Route::get('/chat', [ChatController::class, 'index'])->name('chat');

Route::get('/load-latest-messages', [MessagesController::class, 'getLoadLatestMessages']);

Route::post('/send', [MessagesController::class, 'postSendMessage']);

Route::get('/fetch-old-messages', [MessagesController::class, 'getOldMessages']);

Route::get('/emit', function () {
   \App\Events\MessageSent::broadcast(\App\Models\User::find(1));
});