<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p->title = 'New Post';
        $p->description = 'Post Description';
        $p->document_upload = 'Upload here';
        $p->num_of_likes = 10;
        $p->user_id = 1;
        $p->save();
        
        $posts = Post::factory()->count(10)->create();
    }
}
