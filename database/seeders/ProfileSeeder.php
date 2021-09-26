<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curTime = date('Y-m-d H:i:s');

        DB::table('profiles')->insert([
            [
                'id' => 1,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'name' => 'Rick Sanchez',
                'email' => 'rick_sanchez@mail.com',
                'password' => '123a1',
            ],
            [
                'id' => 2,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'name' => 'Morty Smith',
                'email' => 'morty_smith@mail.com',
                'password' => '123a2',
            ],
            [
                'id' => 3,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'name' => 'Summer Smith',
                'email' => 'summer_smith@mail.com',
                'password' => '123a3',
            ],
            [
                'id' => 4,
                'created_at' => $curTime,
                'updated_at' => $curTime,
                'name' => 'Mr. Meeseeks',
                'email' => 'mr_meeseeks@mail.com',
                'password' => '123a4',
            ],
        ]);
    }
}
