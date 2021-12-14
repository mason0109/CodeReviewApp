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
        $images = Image::factory()->count(10)->create();
    }
}
