<?php

namespace Database\Factories\Doctor;

use App\Models\admin\section;
use App\Models\Doctor\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;


class DoctorFactory extends Factory
{
    protected $model = Doctor::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => $this->faker->phoneNumber,
            'price'=>$this->faker->randomElement([100,400,500,300,200]),
            'section_id' => section::all()->random()->id,

        ];
    }
}
