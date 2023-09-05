<?php

use App\PendaftaranHeader as AppPendaftaranHeader;
use Illuminate\Database\Seeder;

class PendaftaranHeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'image' => 'images/Ujian PPDB_2.jpeg',
            ],
            [
                'image' => 'images/Ujian PAS_5.jpeg',
            ],
            [
                'image' => 'images/Pertemuan Wali Murid_2.jpeg',
            ],
        ];

        AppPendaftaranHeader::insert($images);
    }
}
