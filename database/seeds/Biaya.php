<?php

use App\BiayaPendaftaran;
use Illuminate\Database\Seeder;

class Biaya extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biaya = [
            [
                'nama_biaya' => 'Biaya Pendaftaran',
                'jumlah_biaya' => 'Rp 200.000,-',
            ],
            [
                'nama_biaya' => 'Biaya Masuk',
                'jumlah_biaya' => 'Rp 6.595.000,-',
            ],
            [
                'nama_biaya' => 'SPP Bulanan',
                'jumlah_biaya' => 'Rp 370.000,-',
            ],
            [
                'nama_biaya' => 'Biaya Daftar Ulang',
                'jumlah_biaya' => 'Rp 3.250.000,-',
            ],
        ];

        BiayaPendaftaran::insert($biaya);
    }
}
