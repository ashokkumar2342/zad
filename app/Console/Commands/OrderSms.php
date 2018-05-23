<?php

namespace App\Console\Commands;

use App\Events\SendSmsEvent;
use Event;
use App\Order;
use App\Student;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;
class OrderSms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send order detail to admin by sms';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       
       // if(\Carbon\Carbon::now()->format('H:i') == '12:36'){
       //      $students= Student::whereMonth('dob','=',\Carbon\Carbon::today()->month)->whereDay('dob','=',\Carbon\Carbon::today()->day)->get();
       //      foreach($students as $student){
       //          Event::fire(new SendSmsEvent($student->mobile_sms,'Dear student, ZAD Gloal School wish you very happy birthday.'));
       //          Log::info('Dear student, ZAD Gloal School wish you very happy birthday.'.$student->mobile_sms);
                
       //      }
       //  }

    }
}
