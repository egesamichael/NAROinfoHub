<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AdminResetPassword extends Command
{
    protected $signature = 'admin:reset-password {email} {password}';

    protected $description = 'Reset an admin password and mark email verified';

    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = \App\Models\User::where('email', $email)->first();

        if (! $user) {
            $this->error("User not found: $email");
            return 1;
        }

        $user->password = bcrypt($password);
        $user->email_verified_at = now();
        $user->save();

        $this->info("Password reset for $email");

        return 0;
    }
}
