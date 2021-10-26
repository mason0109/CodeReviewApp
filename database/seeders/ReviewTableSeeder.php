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
        $r->post_id = 002;
        $r->user_id = 001;
        $r->reviewContent = 'This is a review';
        $r->save();

        $reviews = Review::factory()->count(10)->create();
    }
}
