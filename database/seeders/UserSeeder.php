<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            ['user_name' => 'Hien','password'=>'15072002','role_id'=>1,'fullname'=>'HoangThiHien','address'=>'HCM','phone'=>12345,'email'=>'wind07.15.2002@gmail.com'],
        ]);
    }
}
