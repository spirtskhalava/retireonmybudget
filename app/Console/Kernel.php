<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Numbeo;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            
            $value = intval(date('i'))%5;
            echo $value;

            $numbeo = new Numbeo();

            switch ($value) {
                case 0:
                    echo $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityPrices", 20);
                    break;
                case 1:
                    echo $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityHealthcare", 20);
                    break;
                case 2:
                    echo $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityCrime", 20);
                    break;
                case 3:
                    echo $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityPollution", 20);
                    break;
                case 4:
                    echo $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityTraffic", 20);
                    break;
                default:
                    break;
            }

        })->everyMinute()->timezone('America/Chicago')->between('1:00', '6:00');

        $schedule->call(function () {
            $numbeo = new Numbeo();
            $numbeo->getNumbeoCities();
        })->dailyAt('00:00')->timezone('America/Chicago');

        $schedule->call(function () {
            $numbeo = new Numbeo();
            $numbeo->getNumbeoRankingCities();
        })->dailyAt('00:30')->timezone('America/Chicago');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
