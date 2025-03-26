<?php
namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;

class LogUserRegistered
{
    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        Log::info('User registered: ' . $event->user->email);
    }
}
