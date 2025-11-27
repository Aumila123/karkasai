<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conference::create([
            'title' => 'Laravel Summit 2025',
            'description' => 'The biggest Laravel conference in Europe. Learn from the best developers.',
            'date' => '2025-12-15',
            'address' => 'Vilnius, Lithuania'
        ]);

        Conference::create([
            'title' => 'PHP Conference',
            'description' => 'Explore the latest PHP trends and best practices.',
            'date' => '2025-11-20',
            'address' => 'Kaunas, Lithuania'
        ]);

        Conference::create([
            'title' => 'Web Development Meetup',
            'description' => 'Monthly meetup for web developers. Networking and knowledge sharing.',
            'date' => '2025-10-10',
            'address' => 'Klaipėda, Lithuania'
        ]);
    }
}
