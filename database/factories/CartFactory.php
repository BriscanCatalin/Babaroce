<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->numberBetween($min = 100, $max =900);
        $quantity = $this->faker->numberBetween($min = 10, $max =90);

        return [
            'product_id' => 1,
            'quantity' => $quantity,
            'price' => $price,
            'user_id' => 1
        ];
    }
}
