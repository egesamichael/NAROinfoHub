<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LivestockTest extends TestCase
{
    use RefreshDatabase;

    public function test_livestock_page_shows_categories()
    {
        $this->artisan('migrate');
        $this->artisan('db:seed', ['--class' => 'Database\\Seeders\\LivestockSeeder']);

        $response = $this->get('/livestock');
        $response->assertStatus(200);

        $this->assertTrue(\App\Models\LivestockCategory::count() > 0);
    }
}
