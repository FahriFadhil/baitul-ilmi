<?php

use App\AlurPendaftaran;
use Illuminate\Database\Seeder;

class Alur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alur = [
            [
                'nama_alur' => 'Transfer Biaya'
            ],
            [
                'nama_alur' => 'Daftar Online'
            ],
            [
                'nama_alur' => 'Cetak Bukti Pendaftaran'
            ],
            [
                'nama_alur' => 'Lengkapi Berkas Pendaftaran'
            ],
            [
                'nama_alur' => 'Mengikuti Tes dan Interview'
            ],
        ];

        AlurPendaftaran::insert($alur);
    }
}
