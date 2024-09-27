<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Service;
use App\Models\TimeSlot;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1000)->create();
        Service::factory(10)->create();
        TimeSlot::factory(40)->create();
        Booking::factory(1000)->create();
        Payment::factory(1000)->create();
        Review::factory(1000)->create();
    }
}
