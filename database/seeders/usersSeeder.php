<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "id_user" => "MK01",
                    "name" => "hoàng quôc duy",
                    "age" => 20,
                    "date_birday"=>"2004/09/04",
                    "sex" => "nam",
                    "address" => "an thượng,hoài đức , hà nội"
                ],
                [
                
                        "id_user" => "MK02",
                        "name" => "Nguyễn Thị Vân",
                        "age" => 20,
                        "date_birday"=>"2004/07/02",
                        "sex" => "nữ",
                        "address" => "an thượng,hoài đức , hà nội"
                
                ]
            ]
        );
    }
}
