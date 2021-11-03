<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

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
        $c->commentContent = 'This post looks great!';
        $c->user_id = 1;
        $c->commentable_id = Post::all()->random()->id;
        $c->commentable_type = Post::class;
        $c->save();

        $comments = Comment::factory()->count(10)->create();
        $comments = Comment::factory()->count(10)->create([
            'commentable_id'=>Comment::all()->random()->id,
            'commentable_type'=>Comment::class,
        ]);
    }
}
