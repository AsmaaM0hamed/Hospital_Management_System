<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\user\appointmentcontroller;
use App\Models\Doctor\Doctor;

/*
|--------------------------------------------------------------------------
| user Routes
|--------------------------------------------------------------------------
|

*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        // user login and register

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login/user', [AuthenticatedSessionController::class, 'create'])
                ->name('login.user');

    Route::post('login/user/store', [AuthenticatedSessionController::class, 'store'])
    ->name('login.user.store');
});






        Route::middleware(['auth'])->group(function()
        {
            Route::get('/dashboard/user', function ()
             { return view('dashboard.user.userdashboard');})->name('dashboard.user');

            //  appointments

            Route::resource('user/appointments',appointmentcontroller::class);

            Route::get('/get-doctors/{departmentId}', function($departmentId) {
                $doctors = Doctor::where('section_id', $departmentId)->get();

                return json_encode($doctors);
            });










            // User logout
        Route::post('logout/user', [AuthenticatedSessionController::class, 'destroy'])->name('logout.user');
        });

    });

