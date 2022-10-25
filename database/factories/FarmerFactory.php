<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'farm_name' => $this->faker->word(),
            'farm_owner_name' => $this->faker->name(),
            'farm_location' => $this->faker->city(),
            'farm_contact_no' => $this->faker->numerify('(+63) 9#########'),
            'farm_products' => 'Apples, Oranges',
        ];
    }
}
