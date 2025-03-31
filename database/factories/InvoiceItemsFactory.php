<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItems>
 */
class InvoiceItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'num' => fake()->random_bytes(8),
            'title' => 'biweekly invoice',
            'from'  => 'sam',
            'to' => 'company',
        ];
    }
}
