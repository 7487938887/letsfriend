<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesList = [
            'Criminal',
            'Politics',
            'Ecology',
            'Sport'
        ];

        $insert  = [];
        $curTime = date('Y-m-d H:i:s');
        $id      = 1;

        foreach ($categoriesList as $categoryName) {
            $insert[] = [
                'id' => $id,
                'name' => $categoryName,
                'created_at' => $curTime,
                'updated_at' => $curTime,
            ];

            $id++;
        }

        DB::table('categories')->insert($insert);
    }
}
