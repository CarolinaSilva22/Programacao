<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory{
public function definition(): array
{
        return [
             'nome' => $this->faker->name,
             'telefone' => $this->faker->phoneNumber,
             'email' => $this->faker->unique()->freeEmail,
             'Motivo_contato' => $this->faker->numberBetween(1,3),
             'mensagem' => $this->faker->text(200)

        ];
     }
   }