<?php

namespace Database\Seeders;

use App\Models\Doctor\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{

    public function run()
    {
        //
        Doctor::factory()->count(30)->create();
    }
}
