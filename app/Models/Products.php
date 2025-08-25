<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
        'title',
        'description',
        'img',
        'price',
        'category',
        'quantity',
    ];
}
