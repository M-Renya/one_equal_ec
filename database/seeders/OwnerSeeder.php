<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'ダミー1',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
            [
                'name' => 'ダミー2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
            [
                'name' => 'ダミー3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
            [
                'name' => 'ダミー4',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
            [
                'name' => 'ダミー5',
                'email' => 'test5@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
            [
                'name' => 'ダミー6',
                'email' => 'test6@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11'    
            ],
        ]);
    }
}
