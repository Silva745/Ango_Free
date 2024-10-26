<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => htmlspecialchars(fake()->randomHtml()),
            'ends_at' => fake()->dateTimeBetween('now', '+ 5 days'),
            'status' => fake()->randomElement(['Open', 'Closed']),
            'tech_stack' => fake()->randomElements(['PHP', 'Python', 'Java', 'C#', 'Node.Js'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];



        // return [
        //     'title' => implode(' ', fake()->words(5)), // Juntando as palavras em uma string
        //     'description' => fake()->paragraph(), // Usando um parágrafo simples em vez de HTML
        //     'ends_at' => fake()->dateTimeBetween('now', '+ 5 days'),
        //     'status' => fake()->randomElement(['Open', 'Closed']),
        //     'tech_stack' => fake()->randomElements(['PHP', 'Python', 'Java', 'C#', 'Node.Js'], random_int(1, 5)),
        //     'created_by' => \App\Models\User::factory()->create()->id, // Criando um usuário e pegando seu ID
        // ];
    }
}
