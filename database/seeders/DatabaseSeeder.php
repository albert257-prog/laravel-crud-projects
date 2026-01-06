<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Create a specific test user so you can log in easily
    $user = \App\Models\User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    // Create 50 tasks specifically for this user to test pagination
    \App\Models\Task::factory(50)->create([
        'user_id' => $user->id
    ]);

    // Create 10 more tasks for other random users to test Policy security
    \App\Models\User::factory(5)->create(); 
    \App\Models\Task::factory(10)->create();
}
}
