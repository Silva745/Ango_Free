<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Projects;
use App\Models\Proposals;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->count(1000)->create();

        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $u) {

                $projects = Projects::factory()->create(['created_by' => $u->id]);

                Proposals::factory()->count(random_int(4, 45))->create(['projects_id' => $projects->id]);
            });
    }
}
