<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_image',
        'product_description',
        'price',
        'quantity',
        'category_id',
        'sub_category_id',
    ];

    // A product belongs to a particular category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A product can belong to a certain subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // A product can be part of multiple orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
