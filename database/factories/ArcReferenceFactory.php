<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArcReference>
 */
class ArcReferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'architecture_name' => 'the mother house',
            'architect_name' => 'Le Coubuser',
            'year' => '1988',
            'location' => 'Switzerland',
            'how' => 'Concrete, Galvaniun',
            'image' => '/images/ghiburi_house.jpg',
            'overview' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet sapiente praesentium recusandae a ipsam quidem debitis quibusdam repellat in accusantium?',
        ];
    }
}
