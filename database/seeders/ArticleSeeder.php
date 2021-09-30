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
                'prefecture' => '岩手県',
                'cities' => '八幡平市',
                'tag' => '#グルメ',
                'body' => 'あああああああああああああああああああああああああああああああ',
                'user_id' => 1
            ],
            [
                'title' => '広島県呉市の観光スポットおすすめ3選',
                'prefecture' => '広島県',
                'cities' => '呉市',
                'tag' => '#グルメ #場所',
                'body' => 'あああああああああああああああああああああああああああああああ',
                'user_id' => 2
            ],
            [
                'title' => '岩手県紫波郡の観光スポットおすすめ3選',
                'prefecture' => '岩手県',
                'cities' => '紫波郡',
                'tag' => '#グルメ #風俗 #女',
                'body' => 'ああああああああああああああああああああああああああああああ',
                'user_id' => 1
            ]
        ];
        DB::table('articles')->insert($param);
    }
}
