<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert(
            ['rank_name' => 'Zero・SuperHero',
                'required_streak_num'=>'3'],
        );

        DB::table('ranks')->insert(
            ['rank_name' => 'SilverNinja',
                'required_streak_num'=>'6'],
        );

        DB::table('ranks')->insert(
            ['rank_name' => 'Gold Saver',
                'required_streak_num'=>'9'],
        );

        DB::table('ranks')->insert(
            ['rank_name' => 'Platinum Protector',
                'required_streak_num'=>'12'],
        );

        DB::table('ranks')->insert(
            ['rank_name' => 'Diamond Master',
                'required_streak_num'=>'15'],
        );

        DB::table('ranks')->insert(
            ['rank_name' => 'Mithril Sage',
                'required_streak_num'=>'18'],
        );
    }
}
