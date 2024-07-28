<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Nanderson Matheus',
            'email' => 'nanderson@master.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);

        $brandsAndCards = [
            "Toyota" => [
                ["name" => "Corolla", "price" => 25000],
                ["name" => "Camry", "price" => 30000],
                ["name" => "Prius", "price" => 28000],
                ["name" => "Yaris", "price" => 20000],
                ["name" => "Highlander", "price" => 40000],
                ["name" => "RAV4", "price" => 35000],
                ["name" => "4Runner", "price" => 45000],
                ["name" => "Avalon", "price" => 42000],
                ["name" => "Tacoma", "price" => 37000],
                ["name" => "Tundra", "price" => 47000]
            ],
            "Volkswagen" => [
                ["name" => "Golf", "price" => 24000],
                ["name" => "Passat", "price" => 28000],
                ["name" => "Jetta", "price" => 22000],
                ["name" => "Polo", "price" => 19000],
                ["name" => "Tiguan", "price" => 35000],
                ["name" => "Touareg", "price" => 50000],
                ["name" => "Beetle", "price" => 21000],
                ["name" => "Arteon", "price" => 36000],
                ["name" => "ID.3", "price" => 33000],
                ["name" => "ID.4", "price" => 40000]
            ],
            "Ford" => [
                ["name" => "Fiesta", "price" => 15000],
                ["name" => "Focus", "price" => 20000],
                ["name" => "Fusion", "price" => 24000],
                ["name" => "Mustang", "price" => 55000],
                ["name" => "Escape", "price" => 30000],
                ["name" => "Explorer", "price" => 40000],
                ["name" => "Expedition", "price" => 50000],
                ["name" => "Edge", "price" => 35000],
                ["name" => "F-150", "price" => 45000],
                ["name" => "Ranger", "price" => 35000]
            ],
            "Chevrolet" => [
                ["name" => "Spark", "price" => 14000],
                ["name" => "Sonic", "price" => 17000],
                ["name" => "Cruze", "price" => 21000],
                ["name" => "Malibu", "price" => 24000],
                ["name" => "Impala", "price" => 32000],
                ["name" => "Camaro", "price" => 45000],
                ["name" => "Equinox", "price" => 28000],
                ["name" => "Traverse", "price" => 35000],
                ["name" => "Tahoe", "price" => 50000],
                ["name" => "Silverado", "price" => 42000]
            ],
            "Honda" => [
                ["name" => "Civic", "price" => 22000],
                ["name" => "Accord", "price" => 26000],
                ["name" => "Fit", "price" => 16000],
                ["name" => "HR-V", "price" => 24000],
                ["name" => "CR-V", "price" => 30000],
                ["name" => "Passport", "price" => 34000],
                ["name" => "Pilot", "price" => 38000],
                ["name" => "Odyssey", "price" => 32000],
                ["name" => "Ridgeline", "price" => 36000],
                ["name" => "Insight", "price" => 25000]
            ],
            "Nissan" => [
                ["name" => "Versa", "price" => 15000],
                ["name" => "Sentra", "price" => 19000],
                ["name" => "Altima", "price" => 24000],
                ["name" => "Maxima", "price" => 35000],
                ["name" => "Leaf", "price" => 31000],
                ["name" => "Juke", "price" => 22000],
                ["name" => "Kicks", "price" => 20000],
                ["name" => "Rogue", "price" => 27000],
                ["name" => "Murano", "price" => 34000],
                ["name" => "Pathfinder", "price" => 37000]
            ],
            "Hyundai" => [
                ["name" => "Accent", "price" => 15000],
                ["name" => "Elantra", "price" => 19000],
                ["name" => "Sonata", "price" => 24000],
                ["name" => "Kona", "price" => 21000],
                ["name" => "Tucson", "price" => 25000],
                ["name" => "Santa Fe", "price" => 28000],
                ["name" => "Palisade", "price" => 35000],
                ["name" => "Veloster", "price" => 23000],
                ["name" => "Ioniq", "price" => 29000],
                ["name" => "Nexo", "price" => 58000]
            ],
            "Kia" => [
                ["name" => "Rio", "price" => 16000],
                ["name" => "Forte", "price" => 18000],
                ["name" => "Optima", "price" => 23000],
                ["name" => "Stinger", "price" => 33000],
                ["name" => "Soul", "price" => 20000],
                ["name" => "Seltos", "price" => 22000],
                ["name" => "Sportage", "price" => 25000],
                ["name" => "Sorento", "price" => 30000],
                ["name" => "Telluride", "price" => 34000],
                ["name" => "Niro", "price" => 29000]
            ],
            "Mercedes-Benz" => [
                ["name" => "A-Class", "price" => 33000],
                ["name" => "C-Class", "price" => 41000],
                ["name" => "E-Class", "price" => 54000],
                ["name" => "S-Class", "price" => 94000],
                ["name" => "GLA", "price" => 36000],
                ["name" => "GLC", "price" => 43000],
                ["name" => "GLE", "price" => 55000],
                ["name" => "GLS", "price" => 76000],
                ["name" => "CLA", "price" => 38000],
                ["name" => "AMG GT", "price" => 115000]
            ],
            "BMW" => [
                ["name" => "1 Series", "price" => 35000],
                ["name" => "2 Series", "price" => 37000],
                ["name" => "3 Series", "price" => 41000],
                ["name" => "4 Series", "price" => 50000],
                ["name" => "5 Series", "price" => 54000],
                ["name" => "7 Series", "price" => 86000],
                ["name" => "X1", "price" => 36000],
                ["name" => "X3", "price" => 43000],
                ["name" => "X5", "price" => 61000],
                ["name" => "i8", "price" => 147000]
            ],
            "Audi" => [
                ["name" => "A1", "price" => 33000],
                ["name" => "A3", "price" => 36000],
                ["name" => "A4", "price" => 40000],
                ["name" => "A6", "price" => 54000],
                ["name" => "A8", "price" => 86000],
                ["name" => "Q2", "price" => 35000],
                ["name" => "Q3", "price" => 37000],
                ["name" => "Q5", "price" => 49000],
                ["name" => "Q7", "price" => 61000],
                ["name" => "TT", "price" => 50000]
            ],
            "Lexus" => [
                ["name" => "IS", "price" => 41000],
                ["name" => "ES", "price" => 42000],
                ["name" => "GS", "price" => 51000],
                ["name" => "LS", "price" => 76000],
                ["name" => "UX", "price" => 38000],
                ["name" => "NX", "price" => 42000],
                ["name" => "RX", "price" => 53000],
                ["name" => "GX", "price" => 57000],
                ["name" => "LX", "price" => 91000],
                ["name" => "RC", "price" => 43000]
            ],
            "Mazda" => [
                ["name" => "Mazda2", "price" => 17000],
                ["name" => "Mazda3", "price" => 20000],
                ["name" => "Mazda6", "price" => 24000],
                ["name" => "CX-3", "price" => 22000],
                ["name" => "CX-30", "price" => 24000],
                ["name" => "CX-5", "price" => 28000],
                ["name" => "CX-9", "price" => 34000],
                ["name" => "MX-5", "price" => 27000],
                ["name" => "BT-50", "price" => 30000],
                ["name" => "RX-8", "price" => 38000]
            ],
            "Subaru" => [
                ["name" => "Impreza", "price" => 22000],
                ["name" => "Legacy", "price" => 24000],
                ["name" => "WRX", "price" => 27000],
                ["name" => "Crosstrek", "price" => 26000],
                ["name" => "Forester", "price" => 28000],
                ["name" => "Outback", "price" => 30000],
                ["name" => "Ascent", "price" => 33000],
                ["name" => "BRZ", "price" => 31000],
                ["name" => "XV", "price" => 27000],
                ["name" => "Levorg", "price" => 35000]
            ],
            "Porsche" => [
                ["name" => "911", "price" => 100000],
                ["name" => "Cayenne", "price" => 75000],
                ["name" => "Macan", "price" => 60000],
                ["name" => "Panamera", "price" => 90000],
                ["name" => "Taycan", "price" => 80000],
                ["name" => "718 Boxster", "price" => 65000],
                ["name" => "718 Cayman", "price" => 67000],
                ["name" => "Carrera", "price" => 110000],
                ["name" => "Targa", "price" => 115000],
                ["name" => "Spyder", "price" => 130000]
            ],
            "Jaguar" => [
                ["name" => "XE", "price" => 40000],
                ["name" => "XF", "price" => 50000],
                ["name" => "XJ", "price" => 75000],
                ["name" => "F-Pace", "price" => 55000],
                ["name" => "E-Pace", "price" => 43000],
                ["name" => "I-Pace", "price" => 80000],
                ["name" => "F-Type", "price" => 70000],
                ["name" => "S-Type", "price" => 60000],
                ["name" => "XK", "price" => 85000],
                ["name" => "X-Type", "price" => 45000]
            ],
            "Land Rover" => [
                ["name" => "Range Rover", "price" => 90000],
                ["name" => "Range Rover Sport", "price" => 80000],
                ["name" => "Range Rover Velar", "price" => 70000],
                ["name" => "Range Rover Evoque", "price" => 60000],
                ["name" => "Discovery", "price" => 65000],
                ["name" => "Discovery Sport", "price" => 55000],
                ["name" => "Defender", "price" => 70000],
                ["name" => "Freelander", "price" => 45000],
                ["name" => "Defender 90", "price" => 80000],
                ["name" => "Defender 110", "price" => 90000]
            ],
            "Volvo" => [
                ["name" => "XC40", "price" => 40000],
                ["name" => "XC60", "price" => 50000],
                ["name" => "XC90", "price" => 65000],
                ["name" => "S60", "price" => 45000],
                ["name" => "S90", "price" => 55000],
                ["name" => "V60", "price" => 48000],
                ["name" => "V90", "price" => 60000],
                ["name" => "C40", "price" => 52000],
                ["name" => "Polestar 1", "price" => 150000],
                ["name" => "Polestar 2", "price" => 70000]
            ],
            "Jeep" => [
                ["name" => "Wrangler", "price" => 45000],
                ["name" => "Cherokee", "price" => 35000],
                ["name" => "Grand Cherokee", "price" => 50000],
                ["name" => "Compass", "price" => 30000],
                ["name" => "Renegade", "price" => 28000],
                ["name" => "Gladiator", "price" => 40000],
                ["name" => "Patriot", "price" => 25000],
                ["name" => "Commander", "price" => 45000],
                ["name" => "Liberty", "price" => 30000],
                ["name" => "Wagoneer", "price" => 70000]
            ],
            "Tesla" => [
                ["name" => "Model S", "price" => 90000],
                ["name" => "Model 3", "price" => 45000],
                ["name" => "Model X", "price" => 110000],
                ["name" => "Model Y", "price" => 60000],
                ["name" => "Roadster", "price" => 200000],
                ["name" => "Cybertruck", "price" => 50000],
                ["name" => "Semi", "price" => 150000],
                ["name" => "Model 3 Long Range", "price" => 48000],
                ["name" => "Model X Plaid", "price" => 120000],
                ["name" => "Model S Plaid", "price" => 130000]
            ],
            "Acura" => [
                ["name" => "ILX", "price" => 27000],
                ["name" => "TLX", "price" => 38000],
                ["name" => "RLX", "price" => 54000],
                ["name" => "RDX", "price" => 40000],
                ["name" => "MDX", "price" => 47000],
                ["name" => "NSX", "price" => 160000],
                ["name" => "ZDX", "price" => 50000],
                ["name" => "TSX", "price" => 30000],
                ["name" => "RSX", "price" => 25000],
                ["name" => "CL", "price" => 33000]
            ],
            "Genesis" => [
                ["name" => "G70", "price" => 37000],
                ["name" => "G80", "price" => 48000],
                ["name" => "G90", "price" => 71000],
                ["name" => "GV70", "price" => 50000],
                ["name" => "GV80", "price" => 60000],
                ["name" => "Essentia", "price" => 140000],
                ["name" => "Mint", "price" => 35000],
                ["name" => "X", "price" => 40000],
                ["name" => "New York", "price" => 45000],
                ["name" => "Vision", "price" => 70000]
            ],
            "Mitsubishi" => [
                ["name" => "Mirage", "price" => 15000],
                ["name" => "Lancer", "price" => 20000],
                ["name" => "Outlander", "price" => 27000],
                ["name" => "Eclipse Cross", "price" => 24000],
                ["name" => "Pajero", "price" => 45000],
                ["name" => "ASX", "price" => 23000],
                ["name" => "Triton", "price" => 30000],
                ["name" => "Montero", "price" => 40000],
                ["name" => "Xpander", "price" => 22000],
                ["name" => "L200", "price" => 32000]
            ],
            "Infiniti" => [
                ["name" => "Q50", "price" => 38000],
                ["name" => "Q60", "price" => 50000],
                ["name" => "Q70", "price" => 55000],
                ["name" => "QX30", "price" => 35000],
                ["name" => "QX50", "price" => 42000],
                ["name" => "QX60", "price" => 48000],
                ["name" => "QX70", "price" => 53000],
                ["name" => "QX80", "price" => 65000],
                ["name" => "Q45", "price" => 40000],
                ["name" => "QX4", "price" => 45000]
            ],
            "Cadillac" => [
                ["name" => "CT4", "price" => 34000],
                ["name" => "CT5", "price" => 40000],
                ["name" => "CT6", "price" => 55000],
                ["name" => "XT4", "price" => 37000],
                ["name" => "XT5", "price" => 45000],
                ["name" => "XT6", "price" => 54000],
                ["name" => "Escalade", "price" => 75000],
                ["name" => "Lyriq", "price" => 60000],
                ["name" => "ATS", "price" => 39000],
                ["name" => "CTS", "price" => 50000]
            ]
        ];
        foreach ($brandsAndCards as $brand => $cars) {

            $newBrannd = Brand::create([
                'name' => $brand
            ]);

            foreach ($cars as $key => $car) {
                Car::create([
                    'brand_id' => $newBrannd->id,
                    'name' => $car['name'],
                    'value' => $car['price']
                ]);
            }
        }

        $this->call([
            SaleSeeder::class,
        ]);
    }
}
