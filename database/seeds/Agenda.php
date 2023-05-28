<?php

use App\AgendaPendaftaran;
use Illuminate\Database\Seeder;

class Agenda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'agenda' => 'Waktu Pendaftaran : Dimulai dari tanggal … s/d …',
            ],
            [
                'agenda' => 'Pelaksanaan Tes masuk : Dimulai dari tanggal … s/d …',
            ],
            [
                'agenda' => 'Pengumuman Hasil Tes : Dimulai dari tanggal … s/d …',
            ],
            [
                'agenda' => 'Daftar Ulang : Dimulai dari tanggal … s/d …',
            ],
        ];

        AgendaPendaftaran::insert($status);
    }
}
