<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prefixname' => $this->faker->randomElement(['Mr.', 'Ms.', 'Dr.']),
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->lastName(),
            'lastname' => $this->faker->lastName(),
            'suffixname' => $this->faker->optional()->randomElement(['Jr.', 'Sr.', 'III']),
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $this->faker->unique()->userName(),
            'photo' => $this->faker->optional()->imageUrl(),
            'type' => 'user', // Default to 'user' type
        ];
    }
}
