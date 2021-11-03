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
        $comments = Comment::factory()->count(10)->create();
        $comments = Comment::factory()->count(10)->create([
            'commentable_id'=>Comment::all()->random()->id,
            'commentable_type'=>Comment::class,
        ]);
    }
}
