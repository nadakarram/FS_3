<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;
    protected $fillable=[
        "product_id",
        
        "order_id",
        "quantity",
        "offer_id"
    ];
}
