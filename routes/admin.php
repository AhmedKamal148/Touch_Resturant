<?php

use App\Http\Controllers\Admin\AdminChefController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserProfileController;
use Illuminate\Support\Facades\Route;


/*--- Auth Routes ---*/
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'loginPage')->name('auth.login-page');
    Route::post('login', 'login')->name('auth.login');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    /*--- Home Route ---*/
    Route::get('index', [AdminController::class, 'index'])->name('index');

    /*--- Category Routes ---*/
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

    /*--- Chef Routes ---*/
    Route::group(['prefix' => 'chef', 'as' => 'chef.'], function () {
        Route::controller(AdminChefController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/update', 'update')->name('update');
            Route::put('/edit', 'edit')->name('edit');
        });
    });

    /*--- Profile Routes ---*/
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::controller(UserProfileController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('edit', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    /*--- Meal Routes ---*/
    Route::controller(MealController::class)->group(function () {
        Route::group(['prefix' => 'meal', 'as' => 'meal.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{meal}', 'edit')->name('edit');
            Route::put('update/{meal}', 'update')->name('update');
            Route::delete('destroy/{meal}', 'destroy')->name('destroy');
        });
    });

    /*--- Contact Routes ---*/
    Route::group(['prefix' => 'contact-us', 'as' => 'contact_us.'], function () {
        Route::controller(ContactUsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{contact}', 'show')->name('show');
        });

    });
    /*--- Settings Routes ---*/
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::controller(SettingController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::put('/', 'update')->name('update');
        });
    });

    /*--- Log_out Route ---*/
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

