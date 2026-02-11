<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$email = $argv[1] ?? 'admin@example.com';
$new = $argv[2] ?? 'AdminPass123!';

$user = User::where('email', $email)->first();
if (! $user) {
    echo "User not found: $email\n";
    exit(1);
}
$user->password = Hash::make($new);
$user->save();

echo "Password for {$email} reset to: {$new}\n";
