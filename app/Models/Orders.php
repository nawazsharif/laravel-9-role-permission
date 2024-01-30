<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'status_name',
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'telephone',
        'customer_name',
        'payment',
        'payment_status',
        'order_type_name',
        'delivery_time',
        'delivery_charge',
        'order_date_time',
        'formatted_address',
        'currency',
        'total_items',
        'order_total',
        'customer_phone_number',
        'paid_amount_by_customer',
        'amount_to_be_paid',
        'discount',
        'service_charge',
        'handeling_fee',
        'restaurant_name',
        'restaurant_id',
        'Vat',
        'subtotal',
        'GrandTotal',
        'comment',
        'coupon_title',
        'coupon_value',
        'order_menus', // assuming 'order_menus' is stored as JSON
    ];

    protected $casts = [
        'order_menus' => 'json', // specifying that 'order_menus' should be cast as JSON
        'delivery_time' => 'datetime',
        'order_date_time' => 'datetime',
    ];
}
