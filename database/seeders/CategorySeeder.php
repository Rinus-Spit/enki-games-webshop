<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Property;
use App\Models\Category;
use App\Models\Product;

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
        $product = Category::create([
            'name' => 'Abstract Strategy',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Action / Dexterity',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Adventure',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Age of Reason',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'American Civil War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'American Indian Wars',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'American Revolutionary War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'American West',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Ancient',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Animals',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Arabian',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Aviation / Flight',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Bluffing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Book',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Card Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Children\'s Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'City Building',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Civil War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Civilization',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Collectible Components',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Comic Book / Strip',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Deduction',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Dice',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Economic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Educational',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Electronic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Environmental',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Expansion for Base-game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Exploration',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Fantasy',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Farming',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Fighting',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Game System',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Horror',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Humor',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Industry / Manufacturing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Korean War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Mafia',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Math',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Mature / Adult',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Maze',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Medical',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Medieval',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Memory',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Miniatures',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Modern Warfare',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Movies / TV / Radio theme',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Murder/Mystery',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Music',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Mythology',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Napoleonic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Nautical',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Negotiation',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Novel-based',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Number',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Party Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Pike and Shot',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Pirates',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Political',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Post-Napoleonic',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Prehistoric',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Print & Play',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Puzzle',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Racing',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Real-time',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Religious',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Renaissance',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Science Fiction',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Space Exploration',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Spies/Secret Agents',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Sports',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Territory Building',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Trains',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Transportation',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Travel',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Trivia',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Video Game Theme',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Vietnam War',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Wargame',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Word Game',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'World War I',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'World War II',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Category::create([
            'name' => 'Zombies',
            'property_id' => $property->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
