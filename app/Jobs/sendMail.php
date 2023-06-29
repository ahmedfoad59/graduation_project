<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

class sendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // private $name;
    // private $email;
    // private $token;
    public function __construct($details)
    {
        // $this->$name=$name;
        // $this->$email=$email;
        // $this->$token=$token;
        $this->details=$details;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->details['email'])->send(new VerifyEmail($this->details['name'],$this->details['token']));
        
    }
}
