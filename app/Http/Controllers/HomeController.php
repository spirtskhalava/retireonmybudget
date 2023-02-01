<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Mail;
use App\Models\UserCityCompare;
use App\Models\NumbeoCity;
use App\Models\NumbeoRankingCities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
      $data = [];

      $data['cities'] = NumbeoCity::all();
      $data['rankCitiesCostOfLiving'] = NumbeoRankingCities::all();

      $data['user_cities_compare_list'] = [];

      if (Auth::check()) {
          $user = auth()->user();
          $data['user_cities_compare_list'] = UserCityCompare::where('user_id', $user->id)
              ->orderBy('created_at')
              ->get();
      }

      $data['include_hero'] = true;

      return view('pages.compare', $data);

      /*$testimonials = Testimonial::orderBy('sort_order')->get();
      return view('pages.home', array("testimonials" => $testimonials));*/
    }

    /**
     * send a contact email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
      $to = "community@retireonmybudget.com";
      $subject = $request->input('subject');
      
      $data= ['name' => $request->input('name'), 'email' => $request->input('email'), 'subject' => $subject, 'message' => $request->input('message')];
      Mail::to($to)
            ->send(new Contact($data));//TODO after test change to queue to proccess this in background and avoid delay in response time of application
            //->queue(new Contact($data));

		  echo "OK";
    }

    public function testimonial(Request $request)
    {
      if (!empty($request->input('id'))) {

        $testimonial = Testimonial::find($request->input('id'));

        return view('pages.testimonial', array("testimonial" => $testimonial));

      } else {
        return redirect('/');
      }

    }

    public function testimonials()
    {
      /*$arr = ["07/04/2022","14","10","15","10","1","07/05/2022","12","6","10","3","15","07/06/2022","15","8","13","1","9","07/07/2022","12","4","11","14","7","07/08/2022","5","10","8","2","8","07/09/2022","4","14","2","14","12","07/10/2022","2","2","7","9","11","07/11/2022","9","11","3","5","1","07/12/2022","7","1","12","1","6","07/13/2022","9","15","5","9","10","07/14/2022","1","5","4","9","6","07/15/2022","8","8","10","9","13","07/16/2022","7","2","6","2","3"];

      for ($i=0; $i < count($arr); $i+=6) {
        $data_ex = explode("/", $arr[$i]);
        $date = $data_ex[2] . "-" . $data_ex[0] . "-" . $data_ex[1];
        echo "INSERT INTO cash_pop (value, date_added) VALUES (" . $arr[$i+1] . ", '" . $date . "');<br>";
        echo "INSERT INTO cash_pop (value, date_added) VALUES (" . $arr[$i+2] . ", '" . $date . "');<br>";
        echo "INSERT INTO cash_pop (value, date_added) VALUES (" . $arr[$i+3] . ", '" . $date . "');<br>";
        echo "INSERT INTO cash_pop (value, date_added) VALUES (" . $arr[$i+4] . ", '" . $date . "');<br>";
        echo "INSERT INTO cash_pop (value, date_added) VALUES (" . $arr[$i+5] . ", '" . $date . "');<br>";
      }*/

      $result = [];

      for ($i = 1; $i<16; $i++){
        $count = \DB::select('SELECT COUNT(id) as total from loto_cash_pop WHERE DATEDIFF( CURDATE(), date_added ) < 16 && value = ' . $i);
        $total = $count[0]->total;
        $date = \DB::select('SELECT date_added from loto_cash_pop WHERE DATEDIFF( CURDATE(), date_added ) < 16 && value = ' . $i . ' ORDER BY date_added DESC LIMIT 1');

        if (isset($date[0]->date_added)) {

          $datetime1 = date_create(date("Y-m-d", strtotime($date[0]->date_added)));
          $datetime2 = date_create(date("Y-m-d"));
          
          // Calculates the difference between DateTime objects
          $interval = date_diff($datetime1, $datetime2);

          $result[$i] = [$i, $total - $interval->format('%a'), date("Y-m-d", strtotime($date[0]->date_added)), $total];

        } else {
          $result[$i] = [$i, -99, "", 0];
        }
        
      }

      usort($result, function($a, $b) {
        return $a[1] > $b[1];
      });

      $show = [];

      foreach ($result as $item) {
        $show[$item[0]] = $item[1] . " - " . $item[2] . " - " . $item[3];
      }

      dd($show);
      
    }

    public function insertData() 
    {
      $arr = ["08/08/2022","6 - 18 - 20 - 23 - 29","08/09/2022","3 - 12 - 26 - 30 - 33","08/10/2022","5 - 10 - 11 - 12 - 26","08/11/2022","9 - 19 - 25 - 27 - 29","08/12/2022","3 - 20 - 21 - 31 - 34","08/13/2022","16 - 24 - 30 - 32 - 36","08/14/2022","13 - 18 - 22 - 30 - 34","08/15/2022","10 - 11 - 25 - 31 - 32","08/16/2022","8 - 10 - 15 - 23 - 26","08/17/2022","9 - 10 - 14 - 24 - 31","08/18/2022","2 - 7 - 9 - 20 - 25","08/19/2022","7 - 26 - 27 - 29 - 30","08/20/2022","4 - 20 - 23 - 28 - 29","08/21/2022","17 - 19 - 27 - 30 - 36","08/22/2022","15 - 20 - 29 - 31 - 32","08/23/2022","2 - 7 - 30 - 32 - 36","08/24/2022","19 - 21 - 28 - 31 - 36","08/25/2022","4 - 8 - 14 - 19 - 20","08/26/2022","12 - 20 - 25 - 29 - 33","08/27/2022","5 - 15 - 23 - 28 - 36","08/28/2022","2 - 8 - 10 - 14 - 27","08/29/2022","10 - 15 - 16 - 23 - 28","08/30/2022","6 - 13 - 24 - 25 - 34","08/31/2022","4 - 12 - 18 - 20 - 25","09/01/2022","2 - 4 - 13 - 21 - 28","09/02/2022","11 - 14 - 15 - 21 - 34","09/03/2022","15 - 22 - 30 - 33 - 36","09/04/2022","12 - 20 - 25 - 35 - 36","09/05/2022","3 - 20 - 21 - 22 - 35","09/06/2022","10 - 17 - 18 - 29 - 36","09/07/2022","2 - 20 - 21 - 27 - 30","09/08/2022","8 - 10 - 25 - 28 - 34","09/09/2022","8 - 19 - 26 - 28 - 34","09/10/2022","10 - 24 - 25 - 26 - 30","09/11/2022","2 - 4 - 18 - 26 - 33","09/12/2022","1 - 3 - 10 - 17 - 26","09/13/2022","6 - 9 - 13 - 15 - 34","09/14/2022","2 - 8 - 10 - 25 - 31","09/15/2022","3 - 6 - 23 - 25 - 35","09/16/2022","3 - 14 - 15 - 16 - 34","09/17/2022","9 - 20 - 22 - 27 - 34","09/18/2022","13 - 21 - 26 - 32 - 35","09/19/2022","5 - 12 - 20 - 23 - 24","09/20/2022","9 - 12 - 13 - 14 - 24","09/21/2022","13 - 20 - 22 - 33 - 36","09/22/2022","12 - 21 - 22 - 30 - 33","09/23/2022","5 - 14 - 16 - 23 - 28","09/24/2022","17 - 21 - 23 - 31 - 34","09/25/2022","8 - 10 - 23 - 24 - 29","09/26/2022","8 - 12 - 21 - 25 - 35","09/27/2022","20 - 21 - 26 - 31 - 32","09/28/2022","10 - 14 - 15 - 22 - 23","09/29/2022","11 - 15 - 17 - 18 - 21","09/30/2022","9 - 12 - 18 - 19 - 22","10/01/2022","8 - 17 - 24 - 28 - 29","10/02/2022","2 - 3 - 9 - 16 - 22","10/03/2022","1 - 7 - 19 - 21 - 36","10/04/2022","3 - 10 - 12 - 16 - 20","10/05/2022","1 - 12 - 19 - 20 - 21","10/06/2022","2 - 5 - 7 - 9 - 26","10/07/2022","7 - 20 - 25 - 27 - 35","10/08/2022","23 - 26 - 31 - 32 - 34","10/09/2022","7 - 9 - 10 - 29 - 32","10/10/2022","2 - 5 - 10 - 30 - 31","10/11/2022","2 - 12 - 23 - 31 - 33","10/12/2022","7 - 20 - 30 - 31 - 34","10/13/2022","11 - 12 - 14 - 20 - 31","10/14/2022","11 - 12 - 16 - 19 - 28","10/15/2022","10 - 25 - 26 - 31 - 33","10/16/2022","11 - 17 - 19 - 27 - 36","10/17/2022","1 - 18 - 20 - 26 - 29","10/18/2022","15 - 22 - 24 - 29 - 31","10/19/2022","6 - 22 - 30 - 33 - 35","10/20/2022","3 - 22 - 24 - 32 - 35","10/21/2022","10 - 16 - 29 - 34 - 35","10/22/2022","10 - 13 - 26 - 28 - 30","10/23/2022","3 - 7 - 14 - 34 - 35","10/24/2022","5 - 8 - 11 - 18 - 32","10/25/2022","1 - 4 - 12 - 19 - 20","10/26/2022","5 - 9 - 25 - 28 - 31","10/27/2022","2 - 9 - 27 - 29 - 33","10/28/2022","14 - 17 - 29 - 31 - 32","10/29/2022","3 - 22 - 23 - 33 - 36","10/30/2022","4 - 9 - 30 - 31 - 36","10/31/2022","7 - 17 - 24 - 29 - 31","11/01/2022","2 - 12 - 17 - 19 - 28","11/02/2022","1 - 10 - 28 - 32 - 36","11/03/2022","1 - 8 - 16 - 24 - 26","11/04/2022","1 - 23 - 28 - 29 - 32","11/05/2022","14 - 20 - 30 - 31 - 35","11/06/2022","3 - 4 - 6 - 24 - 35","11/07/2022","7 - 19 - 27 - 30 - 34","11/08/2022","6 - 8 - 24 - 31 - 35","11/09/2022","6 - 7 - 13 - 19 - 28","11/10/2022","1 - 12 - 21 - 28 - 31","11/11/2022","6 - 16 - 18 - 28 - 31","11/12/2022","9 - 10 - 14 - 16 - 17","11/13/2022","3 - 10 - 16 - 21 - 26","11/14/2022","6 - 15 - 22 - 34 - 36","11/15/2022","10 - 18 - 20 - 22 - 24","11/16/2022","3 - 6 - 11 - 24 - 35","11/17/2022","10 - 14 - 15 - 16 - 20","11/18/2022","6 - 9 - 28 - 32 - 34","11/19/2022","2 - 10 - 25 - 35 - 36","11/20/2022","2 - 4 - 12 - 22 - 31","11/21/2022","3 - 19 - 26 - 32 - 33","11/22/2022","11 - 24 - 31 - 33 - 34","11/23/2022","2 - 3 - 17 - 22 - 31","11/24/2022","3 - 11 - 14 - 24 - 25","11/25/2022","2 - 4 - 12 - 28 - 34","11/26/2022","1 - 3 - 7 - 22 - 27","11/27/2022","18 - 23 - 24 - 26 - 30","11/28/2022","1 - 6 - 19 - 31 - 34","11/29/2022","4 - 5 - 6 - 12 - 25","11/30/2022","11 - 21 - 23 - 24 - 25","12/01/2022","2 - 3 - 13 - 28 - 35","12/02/2022","4 - 7 - 23 - 33 - 34","12/03/2022","2 - 5 - 24 - 30 - 36","12/04/2022","15 - 25 - 28 - 30 - 36","12/05/2022","6 - 9 - 16 - 33 - 35","12/06/2022","3 - 7 - 10 - 24 - 30","12/07/2022","9 - 14 - 16 - 18 - 21","12/08/2022","13 - 21 - 29 - 33 - 36","12/09/2022","9 - 12 - 15 - 22 - 27","12/10/2022","16 - 27 - 28 - 30 - 33","12/11/2022","11 - 16 - 30 - 35 - 36","12/12/2022","7 - 12 - 16 - 22 - 30","12/13/2022","1 - 5 - 15 - 25 - 27","12/14/2022","2 - 7 - 11 - 14 - 33","12/15/2022","1 - 9 - 14 - 24 - 26","12/16/2022","8 - 9 - 11 - 25 - 35","12/17/2022","2 - 7 - 11 - 21 - 29","12/18/2022","5 - 6 - 28 - 29 - 32","12/19/2022","16 - 28 - 30 - 35 - 36","12/20/2022","6 - 14 - 16 - 20 - 22","12/21/2022","7 - 18 - 21 - 23 - 32","12/22/2022","6 - 17 - 22 - 26 - 29","12/23/2022","4 - 15 - 23 - 24 - 29","12/24/2022","3 - 15 - 18 - 29 - 31","12/25/2022","6 - 16 - 21 - 23 - 33","12/26/2022","7 - 20 - 22 - 26 - 30","12/27/2022","3 - 10 - 16 - 17 - 36","12/28/2022","3 - 12 - 20 - 33 - 34","12/29/2022","20 - 26 - 29 - 35 - 36","12/30/2022","2 - 7 - 16 - 34 - 35","12/31/2022","11 - 12 - 14 - 28 - 35","01/01/2023","6 - 12 - 15 - 25 - 26","01/02/2023","8 - 12 - 15 - 17 - 24","01/03/2023","3 - 15 - 22 - 27 - 34","01/04/2023","6 - 8 - 18 - 20 - 32"];

      for ($i=0; $i < count($arr); $i+=2) {
        $data_ex = explode("/", $arr[$i]);
        $date = $data_ex[2] . "-" . $data_ex[0] . "-" . $data_ex[1];
        $numbers = explode(" - ", str_replace(" (DP)", "", $arr[$i+1]));
        foreach ($numbers as $number) {
          echo "INSERT INTO loto_lottox (value, date_added) VALUES (" . $number . ", '" . $date . "');<br>";
        }
      }
    }

    public function fantasy() 
    {
      $result = [];

      $date = date("Y-m-d");

      var_dump("365 days");

      $init_date = Carbon::now()->subDays(365)->format('Y-m-d');

      $count = DB::select("SELECT value, COUNT(id) as total, MAX(date_added) as date_max from loto_lottox WHERE date_added > '".$init_date."' AND date_added <= '".$date."' GROUP BY value");

      $number_count = [];

      foreach ($count as $number) {
        $number_count[$number->value] = [$number->total, $number->date_max];
      }

      for ($i = 1; $i<=36; $i++) {

        $total = $number_count[$i][0];
        $new_date = $number_count[$i][1];

        if (isset($new_date)) {

          $datetime1 = date_create(date("Y-m-d", strtotime($new_date)));
          $datetime2 = date_create(date("Y-m-d"));
          
          // Calculates the difference between DateTime objects
          $interval = date_diff($datetime1, $datetime2);

          $result[] = [$i, $total*0.3 - ($interval->format('%a')), date("Y-m-d", strtotime($new_date)), $total];

        } else {
          $result[] = [$i, -99, "", 0];
        }
        
      }
    
      usort($result, function($a, $b) {
        return $a[1] > $b[1];
      });

      $show = [];

      foreach ($result as $item) {
        $show[$item[0]] = $item[1] . " - " . $item[2] . " - " . $item[3];
      }

      dd($show);
    }


}
