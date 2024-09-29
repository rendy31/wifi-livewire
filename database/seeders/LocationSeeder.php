<?php

namespace Database\Seeders;

use App\Models\locate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['nama' => 'Kampus'],
            ['nama' => 'Asrama Putra'],
            ['nama' => 'Asrama Putra'],
            ['nama' => 'Kampus & Asrama'],
        ];

        locate::insert($locations);
    }
}
