<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dosen'],
            ['name' => 'Tendik'],
            ['name' => 'NonTendik'],
            ['name' => 'Mahasiswa'],
            ['name' => 'Tamu'],
        ];

        Category::insert($categories);
    }
}
