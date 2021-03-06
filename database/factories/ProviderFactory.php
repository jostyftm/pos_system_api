<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company;
        $email = strtolower(trim($name))."@mail.com";
        $nit = $this->faker->unique()->randomNumber(5)."-1";

        return [
            'name'      =>  $name,
            'nit'       =>  $nit,
            'phone'     =>  $this->faker->unique->phoneNumber,
            'email'     =>  $email
        ];
    }
}
