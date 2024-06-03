<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Reminder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $reminder;
    //get object - reminder
    public function __construct(Reminder $reminder)
    {
        $this ->reminder = $reminder;
    }

    /**
     * Execute the job.
     */
    //send message
    public function handle()
    {
        Log::info('Start job SendReminder for: ' . $this->reminder->id);

        Mail::raw($this->reminder->message, function ($message){
            $message->to($this->reminder->email)
                    ->subject('Reminder'); //email subject
        });

        Log::info('Finish job SendReminder for: ' . $this->reminder->id);
    }
}
