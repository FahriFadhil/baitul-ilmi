<?php

use App\StatusPendaftaran;
use Illuminate\Database\Seeder;

class Status extends Seeder
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
                'status' => 0,
            ],
        ];

        StatusPendaftaran::insert($status);
    }
}
