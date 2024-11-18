<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'users_id' =>User::factory(),
            'event_date' => $this->faker->dateTimeBetween('+1 day', '+1 month'),
            'image' => $this->faker->imageUrl


        ];
    }

    }
