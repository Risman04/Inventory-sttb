<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //sample admin
        $admin = new \App\Models\User();
        $admin -> name = "Administrator";
        $admin -> username = "admin";
        $admin -> email ="admin@gmail.com";
        $admin -> password=bcrypt("12345");
        $admin -> level = "1";
        $admin->save();

        //sample tamu
        $user = new \App\Models\User();
        $user -> name = "User";
        $user -> username = "user";
        $user -> email ="user@gmail.com";
        $user -> password=bcrypt("09876");
        $user -> level = "2";
        $user->save();
    }
}
