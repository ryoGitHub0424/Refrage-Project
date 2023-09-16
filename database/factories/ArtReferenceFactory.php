<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArtReference>
 */
class ArtReferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'art_name' => 'The Stary Night',
            'artist_name' => 'Vincent van Gogh',
            'year' => '1889',
            'location' => 'Museum of Modern Art',
            'medium' => 'Oil on canvas',
            'image' => 'images/YGvcBSMDUszjAagUSG1w7nEIDkUdd214vmOsysMp.jpg',
            'overview' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet sapiente praesentium recusandae a ipsam quidem debitis quibusdam repellat in accusantium?',
        ];
    }
}
