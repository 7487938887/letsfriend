<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curTime = date('Y-m-d H:i:s');

        DB::table('post_comments')->insert([
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

        ]);
    }
}
