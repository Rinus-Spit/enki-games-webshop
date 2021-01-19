<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'excerpt', 'body', 'price', 'stock', 'image', 'min_players', 'max_players', 'age_category_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    
    public function hasCategory($category) {
        return $this->categories->contains($category);
    }

    public function age_category()
    {
        return $this->belongsTo(Age_category::class);
    }
    
}
