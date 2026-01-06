<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $email = env('ADMIN_EMAIL', 'admin@example.com');
        $password = env('ADMIN_PASSWORD', 'ChangeMe123!');

        $user = \App\Models\User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin',
                'password' => bcrypt($password),
                'email_verified_at' => now(),
            ]
        );

        $this->command->info("Admin user ensured: {$user->email}. Set ADMIN_PASSWORD env to change password or reset via tinker.");
    }
}
