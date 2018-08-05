<?php

namespace App\Listeners;

use App\Events\SendSmsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
class SendSms
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendSmsEvent  $event
     * @return void
     */
    public function handle(SendSmsEvent $event)
    {  
          
 
        // $msg=urlencode($event->message);
 
        // $url = "http://bulksms.innovusine.com/sendurlcomma.aspx?user=20084062&pwd=zad@14&senderid=ZADRTK&mobileno=$event->mobile&msgtext=$msg";
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $curl_scraped_page = curl_exec($ch);
        // curl_close($ch);
      
         Log::info($event->mobile.' : '.$event->message);
         
    }
}
