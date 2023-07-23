<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Insurancecontroller;
use App\Http\Controllers\admin\patientscontroller;
use App\Http\Controllers\admin\sectioncontroller;
use App\Http\Controllers\admin\singleserrvices;
use App\Http\Controllers\Auth\AdminloginController;
use App\Http\Controllers\Doctor\DoctorController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|

*/

// ///////////////////////////////////////   admin dashbord  ////////////////////////////////////////////////////////

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
    { //...

        // admin login and register

        Route::middleware('guest')->group(function () {

            Route::get('login/admin', [AdminloginController::class, 'create'])
                        ->name('login.admin');

            Route::post('login/admin/store', [AdminloginController::class, 'store'])
            ->name('login.admin.store');

        });
        // admin logout
        Route::post('logout/admin', [AdminloginController::class, 'destroy'])->middleware(['auth:admin'])
        ->name('logout.admin');

        // ----------------------------------------------
        // admin dashboard


        route::middleware('auth:admin')->group(function()
        {

            Route::get('/dashboard/admin', function () {
                return view('dashboard.admin.adminDashboard');})->name('dashboard/admin');

            // sections
            Route::resource('/sections', sectioncontroller::class);


            // Doctors

            Route::resource('/doctors',DoctorController::class);
            Route::get('/doctor.status,{id}',[DoctorController::class,'status'])->name('doctor.status');


            //  Serrvices

            // #1# Single
            Route::resource('/services',singleserrvices::class);
            Route::get('/service.status,{id}',[singleserrvices::class,'status'])->name('service.status');

            // Insurances

            Route::resource('/insurances',Insurancecontroller::class);

            // Patients

            Route::resource('/patients',patientscontroller::class);
        });

    });

