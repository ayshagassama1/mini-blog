<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            "is_active" => 1,
            "nb_request" => 0,
            "title" => $this->faker->sentence(),
            "body" => $this->faker->text(),
            "user_id" => $this->faker->numberBetween(1, 2),
        ];
    }
}
