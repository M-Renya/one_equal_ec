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
        DB::table('users')->insert([
            'name' => '正岡廉也',
            'email' => 'renya.2000@icloud.com',
            'password' => Hash::make('1013Renya'),
            'created_at' => '2021/12/28 14:19:00'
        ]);
    }
}
