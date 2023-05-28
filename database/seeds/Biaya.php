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
                'description' => 'Biaya Pendaftaran dilakukan di awal sebelum mengisi formulir pendaftaran.

                Biaya pendaftaran sudah termasuk biaya ujian seleksi, Tes tertulis, dan tes Interview anak dan orangtua.',
            ],
            [
                'nama_biaya' => 'Biaya Masuk',
                'jumlah_biaya' => 'Rp 6.595.000,-',
                'description' => 'Biaya tersebut adalah sudah termasuk :

                Biaya Gedung Sekolah, 
                Biaya Sarana Prasarana, 
                Biaya Pengembangan Kegiatan Pendidikan selama 1 tahun, 
                Biaya Seragam Sekolah 3 Stel, 
                Biaya Buku Paket, 
                Biaya Spp Bulan Juli.',
            ],
            [
                'nama_biaya' => 'SPP Bulanan',
                'jumlah_biaya' => 'Rp 370.000,-',
                'description' => 'Dibayarkan setiap bulan paling lambat tanggal 10.

                Sudah mencakup biaya keperluan siswa selama satu bulan kedepan.',
            ],
            [
                'nama_biaya' => 'Biaya Daftar Ulang',
                'jumlah_biaya' => 'Rp 3.250.000,-',
                'description' => 'Dibayarkan saat naik kelas ditahun ke 2 & 3. Bersifat wajib dilunasi.

                Biaya tersebut sudah termasuk :
                
                Biaya Buku Modul Pembelajaran, 
                Biaya kegiatan pendidikan selama 1 tahun.',
            ],
        ];

        BiayaPendaftaran::insert($biaya);
    }
}
