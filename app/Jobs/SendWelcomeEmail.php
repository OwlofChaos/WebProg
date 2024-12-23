<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeEmail implements ShouldQueue
{
    use Queueable;
    public function __construct(public User $user) {}

    public function handle()
    {
        Mail::to($this->user->email)->send(new WelcomeMail($this->user));
    }
}
