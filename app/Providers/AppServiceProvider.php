<?php

namespace App\Providers;

use App\Interface\appointments\appointmentinterface;
use App\Interface\Doctors\DoctorsInterface;
use App\Interface\Insurances\InsuranceInterface;
use App\Interface\Patients\patientInterface;
use App\Interface\sections\sectionsinterface;
use App\Interface\services\SingleServicesInterface;
use App\Repository\appointments\appointmentRepository;
use App\Repository\Doctors\DoctorsRepository;
use App\Repository\Insurances\InsuranceRepository;
use App\Repository\Patients\patientRepository;
use App\Repository\sections\sectionsrepository;
use App\Repository\services\SingleServicesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
        $this->app->bind(sectionsinterface::class, sectionsrepository::class);
        $this->app->bind(DoctorsInterface::class,DoctorsRepository::class);
        $this->app->bind(SingleServicesInterface::class,SingleServicesRepository::class);
        $this->app->bind(InsuranceInterface::class,InsuranceRepository::class);
        $this->app->bind(patientInterface::class,patientRepository::class);
        $this->app->bind(appointmentinterface::class,appointmentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
