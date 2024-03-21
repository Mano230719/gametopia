<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_date',
        'total_amount',
        'status',
        'product_id',
        'order_quantity'
    ];

    // An order belongs to a specific user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // An order can contain multiple products
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('order_quantity')->withTimestamps();
    }

}
