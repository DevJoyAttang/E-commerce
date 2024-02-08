<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" =>"Admin",
            "email" =>"admin@gmail.com",
            "password" => bcrypt("12345678"),
            "role" =>"admin",

        ]);
    }
}
