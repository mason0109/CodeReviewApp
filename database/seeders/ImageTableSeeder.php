<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Post;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i1 = new Image();
        $i1->path = "..\smile.jpg";
        $i1->post_id = Post::all()->random()->id;
        $i1->save();

        $i2 = new Image();
        $i2->path = "https://images.unsplash.com/photo-1533450718592-29d45635f0a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8anBnfGVufDB8fDB8fA%3D%3D&w=1000&q=80";
        $i2->post_id = Post::all()->random()->id;
        $i2->save();

        $i3 = new Image();
        $i3->path = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt808fv8Lz_HOjfVFE2AGEKR3XypaeeO0-AI2-cCjkxyCwAkMvNHbV9BJ8gDOZqX0fBNs&usqp=CAU";
        $i3->post_id = Post::all()->random()->id;
        $i3->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 4;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 5;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 6;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 7;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 8;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 9;
        // $i->save();

        // $i1 = new Image();
        // $i->path = "..\smile.jpg";
        // $i->user_id = 10;
        // $i->save();
    }
}
