<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $auth=[
            'id'=>1,
            'name'=>'admin',
            'status'=>1,
            'order'=>1
        ];

        DB::table('authorities')->insert($auth);

        $data=[
            'id'=>1,
            'idAuth'=>1,
            'fullName'=>'Võ Tiến Toàn',
            'userName'=>'miska97',
            'email'=>'toantienvo@gmail.com',
            'address'=>'1 Lê Duẩn',
            'phone'=>'132456789',
            'image'=>'',
            'passWord'=>'admin',
            'status'=>1,
            'order'=>1
        ];
        DB::table('bh_users')->insert($data);


    }
}
