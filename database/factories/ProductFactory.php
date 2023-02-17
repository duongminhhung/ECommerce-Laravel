<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name  = $this->faker->unique()->words($nb=2,$axText = true );
        $brand_name  = $this->faker->unique()->words($nb=2,$axText = true );
        return [
            'name' => $product_name,
            'name_brand' => $brand_name,
            'description' => $this -> faker->text(200),
            'price' => $this -> faker->numberBetween(5,200),
            'sale' => $this -> faker->numberBetween(0,100),
            'pre_image' => 'product-'. $this -> faker->numberBetween(1,5),
            'cur_image' => 'product-'. $this -> faker->numberBetween(1,5),
            'id_category' => $this -> faker->numberBetween(1,60),
            'quantity' => $this -> faker->numberBetween(1,100),




        ];
    }
}
