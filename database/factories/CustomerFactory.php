<?php
use Faker\Generator as Faker;
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->name,
            'phone_customer' => $this->faker->phoneNumber,
            'email_customer' => $this->faker->email,
            'address_customer' => $this->faker->address,
            'city_customer' => $this->faker->city,
        ];
    }
}
