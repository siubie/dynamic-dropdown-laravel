<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kota::create(['nama' => 'Bandung', 'provinsi_id' => 1]);
        Kota::create(['nama' => 'Surabaya', 'provinsi_id' => 2]);
        Kota::create(['nama' => 'Malang', 'provinsi_id' => 2]);
    }
}
