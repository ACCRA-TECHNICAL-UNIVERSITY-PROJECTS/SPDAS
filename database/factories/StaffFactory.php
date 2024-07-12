<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_id' => $this->faker->unique()->randomNumber(5),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            // 'role' => $this->faker->randomElement(['admin', 'security']),
            // 'password' => $this->faker->password(),
        ];
    }
}
