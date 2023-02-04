<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'wallet_id' => Wallet::factory(),
            'category_id' => Category::factory(),
            'name' => fake()->text(20),
            'value' => fake()->randomDigitNot(0)*100000
        ];
    }
}
