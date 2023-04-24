<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'img',
        'article',
        'nomenclature',
        'price',
        'count',
        'stock_id',
        'brand_id'
    ];
}
