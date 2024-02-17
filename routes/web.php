<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleContRoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('login.show');

        Route::post('/login', [LoginController::class, 'login'])
            ->name('login.submit');

        Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])
            ->name('registration.show');

        Route::post('/registration', [RegistrationController::class, 'createUser'])
            ->name('registration.submit');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/logout', [LoginController::class, 'logout'])
            ->name('logout');

        Route::get('/office', [UserController::class, 'checkRole'])
            ->name('office');
    });
});
