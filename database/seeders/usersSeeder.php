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
        // $auth=[
        //     'id'=>2,
        //     'name'=>'client',
        //     'status'=>1,
        //     'order'=>2
        // ];

        // DB::table('authorities')->insert($auth);

        $data=[
            'id'=>2,
            'idAuth'=>1,
            'fullName'=>'Võ Tiến Toàn',
            'userName'=>'miska99',
            'email'=>'admin@gmail.com',
            'address'=>'1 Lê Duẩn',
            'phone'=>'132456789',
            'image'=>'',
            'password'=>bcrypt('admin'),
            'status'=>1,
            'order'=>2
        ];
        // [
        //     'id'=>3,
        //     'idAuth'=>2,
        //     'fullName'=>'Võ Tiến Toàn',
        //     'userName'=>'miska98',
        //     'email'=>'toanvo@gmail.com',
        //     'address'=>'1 Lê Duẩn',
        //     'phone'=>'132456789',
        //     'image'=>'',
        //     'password'=>bcrypt('admin'),
        //     'status'=>1,
        //     'order'=>3
        // ];
        DB::table('bh_users')->insert($data);


    }
}
