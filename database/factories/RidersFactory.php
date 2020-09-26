<?php

namespace Database\Factories;

use App\Models\Riders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RidersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Riders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->imageUrl($width = 640, $height = 480, 'cats'),
            'nick' => $this->faker->words(1, true),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'job' => $this->faker->jobTitle,
            'level' => $this->faker->randomDigit,
            'mission' => $this->faker->randomDigit,
        ];
    }
}
