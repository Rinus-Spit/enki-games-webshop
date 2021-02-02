<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property = Property::first();
        $product = Property::create([
            'name' => 'Abstract Strategy',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Action / Dexterity',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Adventure',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Age of Reason',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'American Civil War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'American Indian Wars',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'American Revolutionary War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'American West',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Ancient',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Animals',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Arabian',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Aviation / Flight',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Bluffing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Book',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Card Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Children\'s Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'City Building',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Civil War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Civilization',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Collectible Components',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Comic Book / Strip',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Deduction',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Dice',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Economic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Educational',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Electronic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Environmental',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Expansion for Base-game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Exploration',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Fantasy',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Farming',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Fighting',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Game System',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Horror',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Humor',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Industry / Manufacturing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Korean War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Mafia',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Math',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Mature / Adult',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Maze',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Medical',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Medieval',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Memory',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Miniatures',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Modern Warfare',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Movies / TV / Radio theme',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Murder/Mystery',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Music',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Mythology',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Napoleonic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Nautical',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Negotiation',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Novel-based',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Number',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Party Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Pike and Shot',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Pirates',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Political',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Post-Napoleonic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Prehistoric',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Print & Play',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Puzzle',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Racing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Real-time',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Religious',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Renaissance',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Science Fiction',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Space Exploration',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Spies/Secret Agents',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Sports',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Territory Building',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Trains',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Transportation',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Travel',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Trivia',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Video Game Theme',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Vietnam War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Wargame',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Word Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'World War I',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'World War II',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Property::create([
            'name' => 'Zombies',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
