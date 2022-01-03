<?php

namespace Database\Factories;

use App\Models\settingWeb;
use Illuminate\Database\Eloquent\Factories\Factory;

class settingWebFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = settingWeb::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->word,
        'fax' => $this->faker->word,
        'email1' => $this->faker->word,
        'email2' => $this->faker->word,
        'email_contact_us' => $this->faker->word,
        'instagram' => $this->faker->word,
        'twitter' => $this->faker->word,
        'facebook' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
