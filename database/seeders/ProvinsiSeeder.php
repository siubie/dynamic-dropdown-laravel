<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsi')->insert(
            [
                'nama' => 'Jawa Barat',
            ]
        );
        DB::table('provinsi')->insert(
            [
                'nama' => 'Jawa Timur',
            ]
        );
    }
}
