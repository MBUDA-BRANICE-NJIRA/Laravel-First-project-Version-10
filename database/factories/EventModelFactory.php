<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventModel>
 */
class EventModelFactory extends Factory
{
    protected $model = \App\Models\EventModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10, true),
            'description' => $this->faker->paragraph(10, true),
        ];
    }
}
