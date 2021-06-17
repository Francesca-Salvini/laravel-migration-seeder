<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_holiday = new Holiday();
            $new_holiday->country = $faker->country();
            $new_holiday->city = $faker->city();
            $new_holiday->host = $faker->randomDigitNotNull();
            $new_holiday->description = $faker->paragraph();
            $new_holiday->price = $faker->randomNumber(4);
            $new_holiday->save();
        }
    }
}
