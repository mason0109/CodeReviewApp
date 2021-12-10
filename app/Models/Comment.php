<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'comment_content',
        'num_of_comments'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //posts can be commented on
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'commentable');
    }

    //Comments can be commented on
    public function comments()
    {
        return $this->morphedByMany(Comment::class, 'commentable');
    }
}
