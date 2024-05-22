<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TattooArtist;
use App\Models\User;

class TattooArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TattooArtist::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Crée un utilisateur associé à l'artiste tatoueur
        $user = User::factory()->create();

        return [
            'presentation' => $this->faker->sentences(4, true),
            'home_phone' => $this->faker->phoneNumber(),
            'phone' => $this->faker->phoneNumber(),
            'instagram_sociallink' => $this->faker->userName(),
            'created_at' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'user_id' => $user->id,
        ];
    }
}
