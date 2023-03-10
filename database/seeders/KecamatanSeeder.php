<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kecamatan::create(['nama' => 'Cibeunying Kidul', 'kota_id' => 1]);
        Kecamatan::create(['nama' => 'Cibeunying Kaler', 'kota_id' => 1]);
        Kecamatan::create(['nama' => 'Cibiru', 'kota_id' => 1]);

        //kecamatan untuk surabaya
        Kecamatan::create(['nama' => 'Bubutan', 'kota_id' => 2]);
        Kecamatan::create(['nama' => 'Tandes', 'kota_id' => 2]);
        Kecamatan::create(['nama' => 'Tegalsari', 'kota_id' => 2]);

        //kecamatan untuk malang
        Kecamatan::create(['nama' => 'Klojen', 'kota_id' => 3]);
        Kecamatan::create(['nama' => 'Lowokwaru', 'kota_id' => 3]);
        Kecamatan::create(['nama' => 'Sukun', 'kota_id' => 3]);
    }
}
