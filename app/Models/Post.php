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
        'documentUpload',
        'numOfViews',
        'numOfComments',
        'numOfReviews',
    ];

    /**
     * Get the user of the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        //return $this->hasMany(Comment::class);
        return $this->morphMany(Comment::class, 'commentable');
    }
   
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
