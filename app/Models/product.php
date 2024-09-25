<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=    [
        "name",
        "price",

        "benefits",
        
        "ingredient",
        
        'addations',
        
        "stock",
        
        "image1",
        
        "image2",
        
        "image3",
        
        "image4",
        
        "rate",
        
        "discount_prcentage",
        "category_id",
        "video_link"
    ];
}
