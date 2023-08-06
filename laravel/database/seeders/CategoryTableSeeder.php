<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'category_name'=>'food'
            ]
        );

        DB::table('categories')->insert(
            [
                'category_name'=>'internet'
            ]
        );

        DB::table('categories')->insert(
            [
                'category_name'=>'rent'
            ]
        );

        DB::table('categories')->insert(
            [
                'category_name'=>'electricity'
            ]
        );
    }
}
