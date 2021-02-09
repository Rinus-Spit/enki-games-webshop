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
    }
}
