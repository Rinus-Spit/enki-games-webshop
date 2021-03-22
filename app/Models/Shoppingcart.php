<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount', 'tax_amount'
    ];

    public function shoppingcartlines()
    {
        return $this->hasMany(ShoppingcartLine::class);
    }

}
