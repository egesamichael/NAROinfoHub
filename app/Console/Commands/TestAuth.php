<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestAuth extends Command
{
    protected $signature = 'admin:test-auth {email} {password}';

    protected $description = 'Test authentication for a user';

    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $ok = \Illuminate\Support\Facades\Auth::attempt(["email" => $email, "password" => $password]);

        $this->info($ok ? 'auth_ok' : 'auth_fail');

        return $ok ? 0 : 1;
    }
}
