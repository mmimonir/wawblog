<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->word . ' ' . $this->faker->uuid;
        return [
            // 'created_by_id' => 1,
            // 'updated_by_id' => 1,
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => Category::STATUS_ACTIVE,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(Category::IMAGE_WIDTH, Category::IMAGE_HEIGHT),
        ];
    }
}
