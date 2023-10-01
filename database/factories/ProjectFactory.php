<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => implode(' ', $this->faker->words(3)),
            'description' => $this->faker->text(300),
            'link' => 'https://picsum.photos/400',
            'cover_img_id' => 1
        ];
    }
}
