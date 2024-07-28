<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = Car::inRandomOrder()->get();

        foreach ($cars as $car) {
            $sales = fake()->numberBetween(25, 56);

            $sales = $sales * 2;
            $current = 1;

            while ($current <= $sales) {
                $randomSubYears = fake()->numberBetween(1, 5);
                $dateFormat = $randomSubYears > 1 ? 'years' : 'year';
                $dateOfSale = fake()->dateTimeBetween("-$randomSubYears $dateFormat", 'now');
                Sale::create([
                    'car_id' => $car->id,
                    'quantity' => 1,
                    'created_at' => $dateOfSale->format('Y-m-d H:i:s'),
                    'updated_at' => $dateOfSale->format('Y-m-d H:i:s')
                ]);

                $current++;
            }
        }
    }
}
