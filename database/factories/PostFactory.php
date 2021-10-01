<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'content' => $this->faker->realText(500),
        ];
    }
}
