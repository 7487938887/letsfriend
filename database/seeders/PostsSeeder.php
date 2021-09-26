<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curTime = date('Y-m-d H:i:s');

        DB::table('posts')->insert([
            [
                'id' => 1,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'title' => 'Some criminal post',
                'content' => 'some criminal post content',
                'profile_id' => 1,
                'category_id' => 1
            ],
            [
                'id' => 2,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'title' => 'Some politics post',
                'content' => 'some politics post content',
                'profile_id' => 2,
                'category_id' => 2
            ],
            [
                'id' => 3,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'title' => 'Some ecology post',
                'content' => 'some ecology post content',
                'profile_id' => 2,
                'category_id' => 2
            ],
            [
                'id' => 4,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'title' => 'Some sports post',
                'content' => 'some sports post content',
                'profile_id' => 4,
                'category_id' => 4
            ],
        ]);
    }
}
