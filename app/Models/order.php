<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        "state",
        "time_to_recive",
        "user_id",
        "num_order_items",
        "order_total"
    ];
}
