<?php

use App\Video as AppVideo;
use Illuminate\Database\Seeder;

class Video extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = [
            [
                'url' => 'E90KBDUuvxU',
            ],
        ];

        AppVideo::insert($video);
    }
}
