<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Masaoka',
            'email' => 'm.renya1013@admin.com',
            'password' => Hash::make('admin123'),
            'created_at' => '2021/12/29 11:11:11'
        ]);
    }
}
