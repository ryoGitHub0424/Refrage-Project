<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArtPortfolio>
 */
class ArtPortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'untitled art',
            'thumbnail' => '/images/ghiburi.jpg',
            'file' => 'portfolio.pdf',
            'concept' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet sapiente praesentium recusandae a ipsam quidem debitis quibusdam repellat in accusantium?',
        ];
    }
}
