<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'user_id' => $this->faker->numberBetween(1,10),
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->unique()->realtext($maxNbChars = 100, $indexSize = 2),
            'description' => $this->faker->realtext($maxNbChars = 200, $indexSize = 2),
            'document_upload' => $this->faker->realtext($maxNbChars = 50, $indexSize = 2),
            'num_of_likes' => $this->faker->randomNumber($nbDigits = NULL),
            'num_of_comments' => $this->faker->randomNumber($nbDigits = NULL),
            'num_of_reviews' => $this->faker->randomNumber($nbDigits = NULL),
        ];
    }
}
