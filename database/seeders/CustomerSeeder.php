<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pass người dùng = 12345678
        DB::table('customer')->insert([
            ['customer_name' => 'Trần Hà Hữu Cường','email' => 'kimanhlagi14@gmail.com','password' => '$2y$10$IShQe4bKvjkszheOgFLaSu4owVW.h65YZxju9BxMUMGTZVbePmeSi','phone'=>'0908179750','address'=>'Lagi-Bình thuận','status'=>'1','token'=>null],
        ]);
    }
}
