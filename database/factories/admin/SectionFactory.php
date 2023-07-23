<?php

namespace Database\Factories\admin;

use App\Models\admin\section;
use Illuminate\Database\Eloquent\Factories\Factory;


class SectionFactory extends Factory
{
    protected $model = section::class;

    public function definition()
    {

        return [
             'name' => $this->faker->unique()->randomElement(['قسم المخ والاعصاب','قسم الجراحة','قسم الاطفال','قسم النساء والتوليد','قسم العيون','قسم الباطنة']),
            'description'=>$this->faker->paragraph,

        ];

    }


}
