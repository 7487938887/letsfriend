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

        $insert = [];
        $id = 1;

        foreach ($categoriesList as $categoryName) {
            $insert[] = [
                'id' => $id,
                'name' => $categoryName,
            ];

            $id++;
        }

        DB::table('categories')->insert($insert);
    }
}
