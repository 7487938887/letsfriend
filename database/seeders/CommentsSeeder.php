<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curTime = date('Y-m-d H:i:s');

        DB::table('comments')->insert([
            [
                'id' => 1,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some criminal comment from rick',
                'post_id' => 1,
                'profile_id' => 1
            ],
            [
                'id' => 2,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from rick',
                'post_id' => 2,
                'profile_id' => 1
            ],
            [
                'id' => 3,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Morty',
                'post_id' => 2,
                'profile_id' => 2
            ],
            [
                'id' => 4,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Summer',
                'post_id' => 2,
                'profile_id' => 3
            ],
            [
                'id' => 5,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment',
                'post_id' => 3,
                'profile_id' => 4
            ],
            [
                'id' => 6,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Summer',
                'post_id' => 3,
                'profile_id' => 3
            ],
            [
                'id' => 7,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment ',
                'post_id' => 4,
                'profile_id' => 2
            ],
            [
                'id' => 8,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment',
                'post_id' => 4,
                'profile_id' => 1
            ],

        ]);
    }
}
