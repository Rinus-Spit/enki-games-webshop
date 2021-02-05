<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toplist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_toplists');
    }
    

}
