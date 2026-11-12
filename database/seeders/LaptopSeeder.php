<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'brand' => 'Dell',
            'model' => 'XPS 13',
            'processor' => 'Intel Core i7',
            'ram' => 16,
        ]);
    }
}
