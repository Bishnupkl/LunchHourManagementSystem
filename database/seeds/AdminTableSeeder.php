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
            'name'=>'KlientEscape',
            'email'=>'connect@klientescape.com',
            'password'=>bcrypt('secret'),
            'role_id'=>'1',
            'email_verified_at'=>\Carbon\Carbon::now()
        ]);
    }
}
