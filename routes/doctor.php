<?php

use App\Http\Controllers\auth\doctorlogincontroller;
use App\Http\Controllers\Doctor\AppointmentController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
    {
            // doctor login and register

            Route::middleware('guest')->group(function () {

                Route::get('login/doctor', [doctorlogincontroller::class, 'create'])
                            ->name('login.doctor');

                Route::post('login/doctor/store', [doctorlogincontroller::class, 'store'])
                ->name('login.doctor.store');

            });

            Route::middleware('auth:doctor')->group(function()
            {
            // doctor logout
            Route::post('logout/doctor', [doctorlogincontroller::class, 'destroy'])->name('logout.doctor');


            Route::get('/dashboard/doctor', function () {
                return view('dashboard.doctor.doctordashboard');})->name('dashboard/doctor');


                // ######## Doctor appointments
                Route::resource('doctor/appoints',AppointmentController::class);
            });



    });
