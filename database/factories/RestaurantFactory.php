<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'res_name' => Str::random(5)." ".Str::random(6),
            'image' => $this->faker->imageUrl(),
            'email'=>Str::random(8).'@gmail.com',
            'mobile'=> '017'.round(10000,1000000000),
            'owner'=> Str::random(12),

            'description'   => $this->faker->sentences(10, true),
            'location'   => $this->faker->address(),
            'city'   => 'Dhaka',
            'website'   => $this->faker->domainName(),
            'view_count'    => rand(20, 100),
            'pass'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // password

        ];
    }
}
