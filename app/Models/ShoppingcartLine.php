<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingcartLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoppingcart_id', 'user_id', 'product_id', 'quantity', 'price', 'tax_amount'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
