<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded  = [
        'name',
        'name_brand',
        'description',
        'price',
        'sale',
        'pre_image',
        'cur_image',
        'id_category',
        'quantity',
      ];
}
