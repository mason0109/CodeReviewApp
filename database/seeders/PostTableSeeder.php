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
        $p->authorID = 001;
        $p->title = 'This is a title';
        $p->description = 'THis is a description';
        $p->documentUpload = 'Upload doc here';
        $p->save();

        $posts = Post::factory()->count(10)->create();
    }
}
