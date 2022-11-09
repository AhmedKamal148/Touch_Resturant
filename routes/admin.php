<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\SettingController;

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


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('index', [AdminController::class, 'index'])->name('index');

    /*--- Category Route ---*/
    Route::controller(CategoryController::class)->group(function () {
        Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{category}', 'edit')->name('edit');
            Route::put('update/{category}', 'update')->name('update');
            Route::delete('delete/{category}', 'delete')->name('delete');
        });
    });

    Route::group([
        'as' => 'contact_us.',
        'prefix' => 'contact-us',
        'controller' => ContactUsController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{contact}', 'show')->name('show');
    });

    Route::group([
        'as' => 'settings.',
        'prefix' => 'settings',
        'controller' => SettingController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::put('/', 'update')->name('update');
    });
});
