<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => implode(' ', $this->faker->words(4)),
            'content' => implode('/r/n',$this->faker->paragraphs(5)),
            'cover_img_id' => 1,
            'banner_img_id' => 1
        ];
    }
}
