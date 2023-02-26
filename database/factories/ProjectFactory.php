<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'           => $this->faker->uuid,
            'name'         => fake()->name(),
            'date_created' => $this->faker->dateTimeBetween('2004-01-01', '2020-12-31'),
            'validated'    => $this->faker->boolean(), 
        ];
    }
}
