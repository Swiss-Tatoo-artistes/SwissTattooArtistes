<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Adress;
use App\Models\TattooArtist;
use App\Models\Canton;

class AdressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tattooArtists = TattooArtist::all()->pluck('id');
        $cantons = Canton::all()->pluck('id');


        return [
            'is_main' => fake()->boolean,
            'street' => fake()->streetAddress,
            'city' => fake()->city,
            'npa' => fake()->numberBetween(1000, 9999),
            'created_at' => fake()->dateTime()->format('Y-m-d H:i:s'),
            'updated_at' => fake()->dateTime()->format('Y-m-d H:i:s'),
            'tattoo_artist_id' => fake()->randomElement($tattooArtists),
            'canton_id' => fake()->randomElement($cantons),
        ];
    }
}
