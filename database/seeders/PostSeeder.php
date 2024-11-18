<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $user = User::factory()->create();
        $ticket = Ticket::factory()->create();

        DB::table('ads')->insert([
            'title' => $faker->sentence(5),
            'description' => $faker->paragraph,
             'users_id' => $user->id,
             'address' => $faker->address,
            'event_date' => $faker->dateTimeBetween('+1 day', '+1 month'),
            
        ]);
        Ad::factory()
            ->count(5)
            ->create([
                'users_id' => User::factory(),
                 
            ]);
    }
}
