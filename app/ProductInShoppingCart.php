<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInShoppingCart extends Model
{
    public $fillable = [
        'product_id',
        'shopping_cart_id'
    ];
}
