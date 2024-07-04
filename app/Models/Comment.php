<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'date',
        'user_id',
        'blog_id',
    ];

    protected $dates = [
        'date',
    ];

    // A comment belongs to a certain user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A comment can be posted in regards to a blog post
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
