<?php

namespace Database\Seeders;

use App\Models\OrganizerEvent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Organizer;

class Organizer extends Seeder
{
    public function run()
    {
        // Using factory to create 5 organizerEvent
        // OrganizerEvent::factory()->count(5)->create([
        //     'active' => 1 // All organizers will be active
        // ]);

        Organizer::create([
            'name' => 'One Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Two Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Three Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Four Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Five Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Organizer::create([
            'name' => 'Six Organizer', 
            'description' => fake()->text(30),
            'facebook_link' => fake()->url(),
            'x_link' => fake()->url(),
            'website_link' => fake()->url(),
            'active' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 



        
    }
}
