<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kota')->insert(
            [
                'nama' => 'Bandung',
                'provinsi_id' => '1',
            ]
        );
        DB::table('kota')->insert(
            [
                'nama' => 'Surabaya',
                'provinsi_id' => '2',
            ]
        );
        DB::table('kota')->insert(
            [
                'nama' => 'Malang',
                'provinsi_id' => '2',
            ]
        );
    }
}
