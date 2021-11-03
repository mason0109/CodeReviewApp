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
        $p->documentUpload = 'Upload here';
        $p->numOfViews = 10;
        $p->user_id = 1;
        $p->save();
        
        $posts = Post::factory()->count(10)->create();
    }
}
