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
        $c->user_id = 001;
        $c->post_id = 002;
        $c->commentContent = 'This is a comment';
        $c->save();

        $comments = Comment::factory()->count(10)->create();
    }
}
