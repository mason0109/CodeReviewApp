<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => $this->faker->imageUrl(50, 50, 'cats'),
            'post_id' => Post::all()->random()->id,
        ];
    }
}