<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
   protected $fillable=[
   "name",
   "offer_image1",
   "offer_image2",
   "price",
   "desc",
   "discount_prcentage",

   "start_data",
   "end_data",
   "stock",
   "category_id"

   ];
}
