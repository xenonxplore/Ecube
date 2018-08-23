<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'mobashir@techynaf.com',
            'password' => bcrypt('bangladesh'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'email' => 'mobashirmonim@gmail.com',
            'password' => bcrypt('bangladesh'),
            'role' => 'super-admin',
        ]);
    }
}
