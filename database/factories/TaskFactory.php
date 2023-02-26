<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Status;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'          => $this->faker->uuid,
            'name'        => fake()->name(),
            'project_id'  => Project::all()->random()->id,
            'status_id'   => Status::all()->random()->id,
            'team_id'     => Team::all()->random()->id,
        ];
    }
}
