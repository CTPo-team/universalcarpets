<?php

namespace Database\Factories;

use App\Models\bannerProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class bannerProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = bannerProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path_image' => $this->faker->text,
        'title' => $this->faker->word,
        'category' => $this->faker->word,
        'button_title' => $this->faker->word,
        'button_url' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
