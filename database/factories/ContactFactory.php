<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Contact::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->unique()->email(),
            'reason' => $this->faker->numberBetween(1,3),
            'message' => $this->faker->text(200),
        ];
    }
}
