<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EventCategory::class);
    
    // Seed organizers second
    $this->call(Organizer::class);
    
    // Finally, seed events
    $this->call(Events::class);
    }
}
