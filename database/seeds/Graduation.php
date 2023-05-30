<?php

use Illuminate\Database\Seeder;
use App\Principal;

class Graduation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grad = new App\Graduation;
        $grad->name = "Luzman Rifqi S.Kom.I";
        $grad->year = "2023-2024";
    }
}
