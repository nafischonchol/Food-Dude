<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'description'   => $this->faker->sentences(10, true),
            'location'   => $this->faker->address(),
            'hours_of_operation'   => $this->faker->sentence(),
            'dining_style'   => $this->faker->sentence(),
            'locale'   => $this->faker->sentence(),
            'dress_code'   => $this->faker->sentence(),
            'website'   => $this->faker->domainName(),
            'contact'   => $this->faker->phoneNumber(),
            'view_count'    => rand(20, 100),
        ];
    }
}
