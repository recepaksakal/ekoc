<?php

namespace Database\Factories;

use App\Models\Identities;
use App\Models\Riders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IdentitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Identities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blood = ["0 Rh (-)", "0 Rh (+)", "A Rh (-)", "A Rh (+)", "B Rh (-)", "B Rh (+)", "AB Rh (-)", "AB Rh (+)"];
        return [
            'rider_id' => Riders::inRandomOrder()->first(),
            'blood' => $blood[rand(0,7)],
            'born_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'born_place' => $this->faker->city,
            'national_id' => $this->faker->randomNumber(),
            'mother_name' => $this->faker->name,
            'father_name' => $this->faker->name,
            'marital_status' => $this->faker->word(1, true),
        ];
    }
}
