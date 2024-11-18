<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Model bilan bog'liq.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Tasodifiy ma'lumotlarni aniqlash.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ad_id' => ad::factory(), 
            'ticket_adult_price' => $this->faker->numberBetween(50, 500), 
            'ticket_adult_quantity' => $this->faker->numberBetween(1, 100), 
            'ticket_kid_price' => $this->faker->numberBetween(20, 200), 
            'ticket_kid_quantity' => $this->faker->numberBetween(1, 50), 
           
        ];
    }
}
