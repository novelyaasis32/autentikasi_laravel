<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin1',
            'name' => 'Administator Baru',
            'email' => 'admi.baru@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
