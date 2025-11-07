<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Dxsn code below
Route::view('/', 'welcome2')->name('home'); // <-- adds the missing 'home' route

Route::view('/livestock', 'sections.livestock')->name('livestock.index');
Route::view('/crops', 'sections.crops')->name('crops.index');
Route::view('/forestry', 'sections.forestry')->name('forestry.index');
Route::view('/fisheries', 'sections.fisheries')->name('fisheries.index');
Route::view('/facilities', 'sections.facilities')->name('facilities.index');
Route::view('/media', 'sections.media')->name('media.index');
Route::view('/contactus', 'sections.media')->name('contactus.index');
// Facilities dropdown pages
Route::view('/facilities/anti_tick_vaccine', 'sections.facilities.anti_tick_vaccine')->name('facilities.anti_tick_vaccine');
Route::view('/facilities/greenhouses', 'sections.facilities.greenhouses')->name('facilities.greenhouses');
Route::view('/facilities/libraries', 'sections.facilities.libraries')->name('facilities.libraries');

// Anti-tick vaccine sub-pages
Route::view('/facilities/anti-tick-vaccine/vets', 'sections.facilities.anti_tick_vaccine.vets')->name('anti-tick-vaccine.vets');
Route::view('/facilities/anti-tick-vaccine/farmers', 'sections.facilities.anti_tick_vaccine.farmers')->name('anti-tick-vaccine.farmers');
Route::view('/facilities/anti-tick-vaccine/publications', 'sections.facilities.anti_tick_vaccine.publications')->name('anti-tick-vaccine.publications');
Route::view('/facilities/anti-tick-vaccine/faqs', 'sections.facilities.anti_tick_vaccine.faqs')->name('anti-tick-vaccine.faqs');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
