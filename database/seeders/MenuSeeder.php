<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            // Coffee
            [
                'nama' => 'Cappucino',
                'harga' => 20000,
                'type' => 'Coffee'
            ],
            [
                'nama' => 'Americano',
                'harga' => 18000,
                'type' => 'Coffee'
            ],
            [
                'nama' => 'Affogato',
                'harga' => 23000,
                'type' => 'Coffee'
            ],

            // Snack
            [
                'nama' => 'Caesar Salad',
                'harga' => 22000,
                'type' => 'Snack',
            ],
            [
                'nama' => 'French Fries',
                'harga' => 17000,
                'type' => 'Snack',
            ],
            [
                'nama' => 'Potato Chips',
                'harga' => 15000,
                'type' => 'Snack',
            ],
        ]);
    }
}
