<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title',
        'blog_description',
        'content',
        'date',
        'blog_category_id',
    ];

    // Define the relationship to BlogCategory
    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    // Define the relationship to Comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
