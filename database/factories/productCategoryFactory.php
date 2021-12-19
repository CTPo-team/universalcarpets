<?php

namespace Database\Factories;

use App\Models\productCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class productCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_category_id' => $this->faker->word,
        'title' => $this->faker->word,
        'desc' => $this->faker->text,
        'sub_category' => $this->faker->word,
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
