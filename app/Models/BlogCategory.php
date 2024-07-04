<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_category_name',
    ];

    // Define the relationship to Blog
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_category_id');
    }
}
