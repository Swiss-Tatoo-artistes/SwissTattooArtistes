<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TattooArtist;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $isTattooArtist = $this->faker->boolean(80);

        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'pseudo' => substr(fake()->name(), 0, 24),
            'is_tattoo_artist' => $isTattooArtist,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            if ($user->is_tattoo_artist) {
                TattooArtist::factory()->create(['user_id' => $user->id]);
            }
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function isTattooArtist(): static
    {
        return $this->state([
            'is_tattoo_artist' => $this->faker->randomElement([true, false, false, false]),
        ]);
    }
    
}
