<?php

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Http\Request;
use Laravel\Fortify\LoginRateLimiter;

$request = Request::create('/', 'POST', ['email' => 'admin@example.com'], [], [], ['REMOTE_ADDR' => '127.0.0.1']);

/** @var LoginRateLimiter $limiter */
$limiter = $app->make(LoginRateLimiter::class);
$limiter->clear($request);

echo "Login limiter cleared for admin@example.com@127.0.0.1\n";
