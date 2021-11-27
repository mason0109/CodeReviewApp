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

    public function reply()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
