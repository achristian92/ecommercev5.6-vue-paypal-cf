<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShoppingCart;
class Order extends Model
{
    public $fillable = [
        'shopping_cart_id',
        'total',
        'guide_number',
        'email',
        'linea1',
        'linea2',
        'city',
        'postal_code',
        'country_code',
        'state',
        'recipient_name'
    ];

    public static function createFromPaypalResponse($paypalResponse , $shopping_cart){
        $payer = $paypalResponse->payer;
        $orderData = (array) $payer->payer_info->shipping_address;
        $orderData['email'] = $payer->payer_info->email;
        $orderData['total'] = $shopping_cart->amountInCents();
        $orderData['shopping_cart_id'] = $shopping_cart->id;
        return Order::create($orderData);
    }
}
