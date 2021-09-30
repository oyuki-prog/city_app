<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'oyuki',
                'email' => 'testoyuki@test.com',
                'prefecture' => '岩手県',
                'password' => 'password'
            ],
            [
                'name' => 'kazuo',
                'email' => 'testkazuo@test.com',
                'prefecture' => '広島県',
                'password' => 'password'
            ],
            [
                'name' => 'yo-da',
                'email' => 'testyo-da@test.com',
                'prefecture' => '群馬県',
                'password' => 'password'
            ]
        ];
        DB::table('users')->insert($param);
    }
}
