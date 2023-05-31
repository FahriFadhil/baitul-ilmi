<?php

use App\User;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'smabi.tamara@gmail.com',
            'password' => bcrypt(env('ADMIN_PASSWORD')),
        ]);
    }
}
