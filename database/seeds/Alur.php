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
                'nama_alur' => 'Transfer Biaya',
                'description' => 'Rp 200.000,- BSI Kode Bank (451).
                No.Rek 711 018 111 8
                a.n Yayasan Manarusunnah.'
            ],
            [
                'nama_alur' => 'Daftar Online',
                'description' => ''
            ],
            [
                'nama_alur' => 'Cetak Bukti Pendaftaran',
                'description' => ''
            ],
            [
                'nama_alur' => 'Lengkapi Berkas Pendaftaran',
                'description' => ''
            ],
            [
                'nama_alur' => 'Mengikuti Tes dan Interview',
                'description' => 'Mengikuti Tes dan Interview Sesuai Jadwal Yang Telah Ditentukan Pada Masing-Masing satuan sekolah.'
            ],
        ];

        AlurPendaftaran::insert($alur);
    }
}
