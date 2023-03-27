<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'manufacturer' => 'Manufacturer 1',
                'price' => 9.99,
                'production_date' => '2022-01-01',
            ],
            [
                'name' => 'Product 2',
                'manufacturer' => 'Manufacturer 2',
                'price' => 19.99,
                'production_date' => '2022-02-01',
            ],
            [
                'name' => 'Product 3',
                'manufacturer' => 'Manufacturer 3',
                'price' => 29.99,
                'production_date' => '2022-03-01',
            ],
        ]);
    }
}
