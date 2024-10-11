<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Organizer;
use App\Models\CategoryEvent;
use App\Models\EventCategory;
use App\Models\OrganizerEvent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class Events extends Seeder
{
    public function run()
    {
        // Create 6 events, randomly assigning existing organizers and categories
        // Event::factory()->count(6)->create([
        //     'organizer_events_id' => OrganizerEvent::all()->random()->id, // Assign random organizer
        //     'category_events_id' => CategoryEvent::all()->random()->id, // Assign random category
        //     'active' => 1 // All events will be active
        // ]);

        Event::create([
            'title' => 'Piano Concert', 
            'venue' => 'Graha Pena',
            'date' => '2022-02-17',
            'start_time' => '14:00:00',
            'description' => 'She was infatuated with color. She didnt have a favorite color per se, but she did have a fondness for teals and sea greens. You could see it in the clothes she wore that color was an important part of her overall style. She took great pride that color flowed from her and that color was always all around her. That is why, she explained to her date sitting across the table, that she could never have a serious relationship with him due to the fact that he was colorblind.',
            'booking_url' => 'sim.petra.ac.id', 
            'tags' => 'Concert, Piano, Classic',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Indonesia Innovation Challenge 2024', 
            'venue' => 'Jatim Expo',
            'date' => '2023-05-23',
            'start_time' => '07:00:00',
            'description' => fake()->text(30),
            'booking_url' => fake()->url(), 
            'tags' => 'Innovation Challenge, Surabaya, Science & Tech Events',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1,
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Day6 Concert', 
            'venue' => 'Graha Pena',
            'date' => '2022-10-16',
            'start_time' => '17:00:00',
            'description' => 'There was something beautiful in his hate. It wasnt the hate itself as it was a disgusting display of racism and intolerance. It was what propelled the hate and the fact that although he had this hate, he didnt understand where it came from. It was at that moment that she realized that there was hope in changing him.',
            'booking_url' => 'sim.petra.ac.id', 
            'tags' => 'Day6, Kpop, Concert',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Surabaya Education Expo 2023',
            'venue' => 'Tunjungan Plaza',
            'date' => '2023-10-16',
            'start_time' => '10:00:00',
            'description' => fake()->text(30),
            'booking_url' => fake()->url(), 
            'tags' => 'Surabaya Expo, Education',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Petra Education Fair',
            'venue' => 'Fairway Nin',
            'date' => '2024-7-15',
            'start_time' => '10:00:00',
            'description' => fake()->text(30),
            'booking_url' => fake()->url(), 
            'tags' => 'PCU, Education, University, Expo',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Japanese Culture Expo 2024', 
            'venue' => 'Grand City',
            'date' => '2024-12-22',
            'start_time' => '10:00:00',
            'description' => fake()->text(30),
            'booking_url' => fake()->url(), 
            'tags' => 'Surabaya Expo, Japan Culture',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 

        Event::create([
            'title' => 'Poprmart Expo 2024', 
            'venue' => 'Grand City',
            'date' => '2022-10-21',
            'start_time' => '10:00:00',
            'description' => fake()->text(30),
            'booking_url' => fake()->url(), 
            'tags' => 'Hospital Expo, Surabaya Expo',
            'organizer_events_id' => Organizer::all()->random()->id, // Assign random organizer
            'category_events_id' => 1, // Assign random category
            'active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]); 
    }
}
