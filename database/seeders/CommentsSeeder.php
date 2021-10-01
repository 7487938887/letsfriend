<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $curTime = Carbon::now()->toDateTimeString();

        DB::table('comments')->insert([
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some criminal comment from rick',
                'post_id' => 1,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from rick',
                'post_id' => 2,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Morty',
                'post_id' => 2,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Summer',
                'post_id' => 2,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment',
                'post_id' => 3,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment from Summer',
                'post_id' => 3,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment ',
                'post_id' => 4,
            ],
            [
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'content' => 'some politics comment',
                'post_id' => 4,
            ],

        ]);
    }
}
