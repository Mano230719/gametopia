<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_name',
    ];

    // A subcategory can contain multiple products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // A subcategory belongs to a particular category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
