<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                "title" => "Суп",
            ],
            [
                "title" => "Горячее блюдо",
            ],
            [
                "title" => "Салат",
            ],
        ];
        DB::table('categories')->insert($category);
    }
}
