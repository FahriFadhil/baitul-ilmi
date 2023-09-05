<?php

use App\HomeHeader as AppHomeHeader;
use Illuminate\Database\Seeder;

class HomeHeader extends Seeder
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
                'image' => 'images/Masjid2.jpeg',
            ],
            [
                'image' => 'images/WhatsApp Image 2022-01-21 at 08.13.06.jpeg',
            ],
            [
                'image' => 'images/Masjid1.jpeg',
            ],
        ];

        AppHomeHeader::insert($images);
    }
}
