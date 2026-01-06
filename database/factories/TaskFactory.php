<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition(): array
{
    return [
        'user_id' => \App\Models\User::all()->random()->id, // Assign to a random existing user
        'title' => fake()->sentence(4),
        'description' => fake()->paragraph(),
        'status' => fake()->randomElement(['pending', 'completed']),
    ];
}
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
}
