<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demo2>
 */
class Demo2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'task_name' => fake()->word,
                'task_description' => fake()->paragraph(2,true),
                'completed' =>fake()->boolean(),
        ];
    }
}
