<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->safeEmail,
            'tel1' => $this->faker->numberBetween(1,3),
            'tel2' => $this->faker->numberBetween(1,4),
            'tel3' => $this->faker->numberBetween(1,4),
            'address' => $this->faker->text(20),
            'building' => $this->faker->text(20),
            'category_id' =>$this->faker->numberBetween(1, 5),
            'detail' => $this->faker->sentence,
        ];
    }
}
