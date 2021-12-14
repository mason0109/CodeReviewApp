<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'document_upload',
        'image',
        'num_of_likes',
        'num_of_comments',
        'num_of_reviews',
    ];

    /**
     * Get the user of the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
   
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
