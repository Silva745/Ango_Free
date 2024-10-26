<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Projects;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proposals>
 */
class ProposalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'hours' => fake() -> numberBetween(1, 120),
            'projects_id' => Projects::factory(),
        ];
    }
}
