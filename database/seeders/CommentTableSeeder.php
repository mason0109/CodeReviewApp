<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment;
        $c->authorID = 001;
        $c->postID = 002;
        $c->commentContent = 'This is a comment';
        $c->save();
    }
}
