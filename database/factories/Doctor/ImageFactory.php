<?php
namespace Database\Factories\Doctor;


use App\Models\Doctor\Image;
use App\Models\Doctor\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{

    protected $model = Image::class;


    public function definition()
    {
        return [
            'imagename' =>  $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg']),
            'imageable_id' => Doctor::all()->random()->id,
            'imageable_type' => 'App\Models\Doctor\Doctor',
        ];
    }
}
