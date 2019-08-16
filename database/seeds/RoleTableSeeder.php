<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \Illuminate\Support\Facades\DB::table('roles')->insert([
            \Illuminate\Support\Facades\DB::table('roles')->insert([
            ['name'=>'super_admin'],
            ['name'=>'admin'],
            ['name'=>'staff'],
        ]);
    }
}
