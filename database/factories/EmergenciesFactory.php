<?php

namespace Database\Factories;

use App\Models\Emergencies;
use App\Models\Riders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmergenciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Emergencies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rider_id' => Riders::inRandomOrder()->first(),
            'name' => $this->faker->name,
            'phone' => $this->faker->randomNumber(),
            'address' => $this->faker->address,
        ];
    }
}
