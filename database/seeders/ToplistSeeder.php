<?php

namespace Database\Seeders;
use App\Models\Toplist;
use App\Models\Product;
use App\Models\ProductToplist;

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


        
    $newList = Toplist::create([
        'name' => 'new',
        'created_at' => now(),
        'updated_at' => now()
        ]);
    $popularList = Toplist::create([
        'name' => 'popular',
        'created_at' => now(),
        'updated_at' => now()
        ]);

    $newProducts = Product::latest()->limit(20)->pluck('id')->toArray();
    $newList->products()->sync((array)$newProducts);
    $popularProducts = Product::inRandomOrder()->limit(20)->pluck('id')->toArray();
    $popularList->products()->sync((array)$popularProducts);
    }
}
