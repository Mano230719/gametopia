<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // A category can contain multiple products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // A category can have multiple subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
