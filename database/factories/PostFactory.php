<?php

namespace Database\Factories;

use App\Models\Post;
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
            'authorID' => $this->faker->unique()->numberBetween(1,100),
            'title' => $this->faker->unique()->realtext($maxNbChars = 100, $indexSize = 2),
            'description' => $this->faker->realtext($maxNbChars = 200, $indexSize = 2),
            'documentUpload' => $this->faker->randomNumber($nbDigits = 1),
            'numOfViews' => $this->faker->randomNumber($nbDigits = NULL),
            'numOfComments' => $this->faker->randomNumber($nbDigits = NULL),
            'numOfReviews' => $this->faker->randomNumber($nbDigits = NULL),
        ];
    }
}
