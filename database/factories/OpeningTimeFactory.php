<?php

namespace Database\Factories;

use App\Models\OpeningTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OpeningTime>
 */
class OpeningTimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpeningTime::class;

    private static $daysOfWeek = [];
    private static $dayPeriodCount = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Initializing days of the week and periods if not already done
        if (empty(self::$daysOfWeek)) {
            self::$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            foreach (self::$daysOfWeek as $day) {
                self::$dayPeriodCount[$day] = ['am' => 0, 'pm' => 0];
            }
        }

        // Find a day and period with less than 2 occurrences
        $day = $this->faker->randomElement(self::$daysOfWeek);
        $period = $this->faker->randomElement(['am', 'pm']);
        while (self::$dayPeriodCount[$day][$period] >= 2) {
            $day = $this->faker->randomElement(self::$daysOfWeek);
            $period = $this->faker->randomElement(['am', 'pm']);
        }
        self::$dayPeriodCount[$day][$period]++;

        // Define opening and closing hours based on period
        $opening_hour = $period === 'am' ? $this->faker->time('H:i:s', '11:59:59') : $this->faker->time('H:i:s', '23:59:59');
        $closure_hour = $period === 'am' ? $this->faker->time('H:i:s', '11:59:59') : $this->faker->time('H:i:s', '23:59:59');

        return [
            'opening_day' => $day,
            'period' => $period,
            'opening_hour' => $opening_hour,
            'closure_hour' => $closure_hour,
            'adress_id' => \App\Models\Adress::factory(), // Assuming you have an Adress factory
            'tattoo_artist_id' => \App\Models\TattooArtist::factory(), // Assuming you have a TattooArtist factory
        ];
    }
}
