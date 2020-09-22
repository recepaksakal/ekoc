<?php

namespace Database\Factories;

use App\Models\Contacts;
use App\Models\Riders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rider_id' => Riders::inRandomOrder()->first(),
            'phone' => $this->faker->randomNumber(),
            'address' => $this->faker->address,
            'business_phone' => $this->faker->randomNumber(),
            'business_address' => $this->faker->address,
        ];
    }
}
