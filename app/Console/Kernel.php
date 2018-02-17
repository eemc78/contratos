<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        // puede ser asi:  exec:sendemail
        // o asi:  execEmail::class
        Commands\execEmail::class 
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        /*$schedule->command('emails:send')
        ->daily()
        ->when(function () {
            return true;
            })
         ->sendOutputTo($filePath)
         ->emailOutputTo('foo@example.com')
         ->withoutOverlapping();*/
    }
}
