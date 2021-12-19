<?php

namespace Database\Factories;

use App\Models\blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class blogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_category_id' => $this->faker->word,
        'title' => $this->faker->word,
        'path_image' => $this->faker->text,
        'desc' => $this->faker->text,
        'short_desc' => $this->faker->text,
        'status' => $this->faker->word,
        'seo_desc' => $this->faker->text,
        'seo_category' => $this->faker->text,
        'seo_keyword' => $this->faker->text,
        'seo_url' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
