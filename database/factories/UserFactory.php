<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'), // password
            'remember_token' => Str::random(10),
            'preferences' => null,
        ];
    }

    public function unverified(): UserFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
