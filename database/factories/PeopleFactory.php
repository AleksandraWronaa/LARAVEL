<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

use App\Models\People;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    protected $model = People::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'surname' => fake()->name(),
            'phone' => fake()->randomNumber(9, true),
            'street' => fake()->words(nb:1, asText:true),
            'city' => fake()->words(nb:1, asText:true),
            'country' =>fake()->words(nb:1, asText:true),
        ];
    }

}
