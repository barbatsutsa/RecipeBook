<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe = [
            [
                "name" => "Борщ",
                "category_id" => "1",
                "user_id" => "1",
                "description" => "Борщ"

            ],
            [
                "name" => "Плов",
                "category_id" => "2",
                "user_id" => "1",
                 "description" => "Плов"
            ],
        ];
        DB::table('recipes')->insert($recipe);
    }
}
