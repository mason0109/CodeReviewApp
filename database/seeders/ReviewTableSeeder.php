<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Review;
        $r->postID = 002;
        $r->authorID = 001;
        $r->reviewContent = 'This is a review';
        $r->save();
    }
}
