<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Biaya::class);
        $this->call(Alur::class);
        $this->call(Status::class);
        $this->call(Agenda::class);
        $this->call(Syarat::class);
        $this->call(Graduation::class);
        $this->call(Principal::class);
        $this->call(Admin::class);
        $this->call(HomeHeader::class);
        $this->call(PendaftaranHeader::class);
    }
}
