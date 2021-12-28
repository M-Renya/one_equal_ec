<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'フード',
                'sort_order' => 1,
            ],
            [
                'name' => 'ファッション',
                'sort_order' => 2,
            ],
            [
                'name' => 'ギフト',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '肉',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => '魚',
                'sort_order' => 2,
                'primary_category_id' => 1,

            ],
            [
                'name' => '麺',
                'sort_order' => 3,
                'primary_category_id' => 1,

            ],
            [
                'name' => '米',
                'sort_order' => 4,
                'primary_category_id' => 1,

            ],
            [
                'name' => '野菜',
                'sort_order' => 5,
                'primary_category_id' => 1,

            ],
            [
                'name' => 'キャップ',
                'sort_order' => 6,
                'primary_category_id' => 2,

            ],
            [
                'name' => 'トップス',
                'sort_order' => 7,
                'primary_category_id' => 2,

            ],
            [
                'name' => 'ボトムス',
                'sort_order' => 8,
                'primary_category_id' => 2,

            ],
            [
                'name' => 'シューズ',
                'sort_order' => 9,
                'primary_category_id' => 2,

            ],
            [
                'name' => '食',
                'sort_order' => 6,
                'primary_category_id' => 3,

            ],
            [
                'name' => '衣類',
                'sort_order' => 6,
                'primary_category_id' => 3,

            ],
        ]);
    }
}
