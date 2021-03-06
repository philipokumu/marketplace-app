<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
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
            'title' => $this->faker->firstName(),
            'price' => 50.00,
            'currency' => 'KES',
            'mobile' => '+254 720 123 456',
            'email' => 'seller@example.com',
            'description' => $this->faker->text(100),
            'date_online' => Carbon::now()
        ];
    }
}
