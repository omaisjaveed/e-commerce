<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('ecom_users')->insert([
            'name'=>'Yasir',
            'email'=>'yasir@gmail.com',
            'password'=>'asim',
       ]);
    }
}
