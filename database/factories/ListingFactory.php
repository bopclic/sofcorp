<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company(),
            'description' => $this->faker->paragraph(2),
            'tags' => 'website, application, graphics',
            'location' => $this->faker->city(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url()
        ];
    }
}
