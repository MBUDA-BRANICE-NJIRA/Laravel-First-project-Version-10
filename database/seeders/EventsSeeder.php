<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventModel; // Correct import

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventModel::factory()->count(40)->create(); // Use EventModel, not Events or Event
    }
}
