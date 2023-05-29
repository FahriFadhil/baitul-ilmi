<?php

use App\Graduation as AppGraduation;
use Illuminate\Database\Seeder;

class Graduation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppGraduation::create([
            'year' => '2022/2023',
            'principal_name' => 'Luzman Rifqi',
        ]);
    }
}
