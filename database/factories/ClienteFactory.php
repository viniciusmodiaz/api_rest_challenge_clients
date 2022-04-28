<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'       => $this->faker->name(),
            'telefone'         => $this->faker->number(11),
            'cpf' => $this->faker->number(12),
            'placa_do_carro' => $this->faker->sentences(7),
        ];
    
    }

    public function run() 
    {
        ClienteFactory::factory()->times(50)->create();
    }
}
