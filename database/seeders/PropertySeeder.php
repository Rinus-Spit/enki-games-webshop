<?php

namespace Database\Seeders;
use App\Models\Property;

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Property::create([
            'name' => 'Genre',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $product = Property::create([
            'name' => 'Thema',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $product = Property::create([
            'name' => 'Gametype',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $product = Property::create([
            'name' => 'Wargames',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $product = Property::create([
            'name' => 'Overig',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
