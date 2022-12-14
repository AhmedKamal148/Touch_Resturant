<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EndUser\ContactUsController;
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


Route::group(['prefix' => '/', 'as' => 'endUser.'], function () {
    /*---Home Routes ---*/
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
    });

    Route::post('contact-us', [ContactUsController::class, 'store'])->name('contact_us.store');
});
