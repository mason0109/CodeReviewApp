<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = new Image();
        $i->path = "..\smile.jpg";
        $i->user_id = 1;
        $i->save();
    }
}
