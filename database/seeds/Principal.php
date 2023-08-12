<?php

use App\Principal as AppPrincipal;
use Illuminate\Database\Seeder;

class Principal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $principal = [
            [
                'principal_name' => 'Luzman Rifqi S.Kom.I',
                'images' => 'Kepala-Sekolah.jpg',
            ],
        ];

        AppPrincipal::insert($principal);
    }
}
