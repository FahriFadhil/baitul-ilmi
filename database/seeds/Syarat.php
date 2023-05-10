<?php

use App\SyaratPendaftaran;
use Illuminate\Database\Seeder;

class Syarat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $syarat = [
            [
                'syarat' => 'Membayar uang pendaftaran sebesar Rp. 200.000,- via transfer atau tunai ke loket administrasi di sekolah.',
            ],
            [
                'syarat' => 'Mengisi formulir pendaftaran dan menyerahkan kembali dengan disertai syarat administrasi lainnya.',
            ],
            [
                'syarat' => 'Menyiapkan berkas-berkas persyaratan.',
            ],
            [
                'syarat' => 'Foto copy akta kelahiran (1 lembar).',
            ],
            [
                'syarat' => 'Nomor NISN siswa (1 lembar).',
            ],
            [
                'syarat' => 'Foto copy Kartu Keluarga (KK) (1 lembar).',
            ],
            [
                'syarat' => 'Foto copy KTP kedua orang tua masing-masing (1 lembar).',
            ],
            [
                'syarat' => 'Surat keterangan sehat dari dokter (1 lembar).',
            ],
            [
                'syarat' => 'Surat kelakuan baik dari sekolah asal (1 lembar).',
            ],
            [
                'syarat' => 'Membawa materai 10.000 (2 lembar).',
            ],
            [
                'syarat' => 'Membawa Map coklat untuk data berkas calon peserta didik.',
            ],
        ];

        SyaratPendaftaran::insert($syarat);
    }
}
