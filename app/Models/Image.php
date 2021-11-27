<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Get the user of the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
