<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Age_category;

class AgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Age_category::create([
            'description' => 'Alle leeftijden',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Age_category::create([
            'description' => '1 - 5 jaar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Age_category::create([
            'description' => '6 - 15 jaar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Age_category::create([
            'description' => '12 - 18 jaar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Age_category::create([
            'description' => '18 + jaar',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
