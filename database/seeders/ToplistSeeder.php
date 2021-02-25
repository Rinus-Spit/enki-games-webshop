<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ToplistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $product = Toplists::create([
        'name' => 'new',
        'created_at' => now(),
        'updated_at' => now()
        ]);
    $product = Toplists::create([
        'name' => 'popular',
        'created_at' => now(),
        'updated_at' => now()
        ]);
    }
}
