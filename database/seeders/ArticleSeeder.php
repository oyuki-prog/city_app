<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => '岩手県八幡平市のおすすめ１０選！',
                'body' => 'あああああああああああああああああああああああああああああああ'
            ],
            [
                'title' => '広島県呉市の観光スポットおすすめ3選',
                'body' => 'あああああああああああああああああああああああああああああああ'
            ],
            [
                'title' => '岩手県紫波町のの観光スポットおすすめ3選',
                'body' => 'ああああああああああああああああああああああああああああああ'
            ]
        ];
        DB::table('articles')->insert($param);
    }
}
