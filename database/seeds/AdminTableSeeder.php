<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name'=>'LHMS',
            'email'=>'connect@lhms.com',
            'password'=>bcrypt('secret'),
            'phone_number'=>'9811990067',
            'address'=>'kathmandu',
            'is_admin'=>1,
            'is_verified'=>1,
        ]);
    }
}
