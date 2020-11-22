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
                "image" => "",
                "category_id" => "1",
                "user_id" => "1",
                "description" => "Разновидность супа на основе свёклы, которая придаёт ему характерный красный цвет.",
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                "name" => "Плов",
                "image" => "",
                "category_id" => "2",
                "user_id" => "1",
                 "description" => "Блюдо восточной кухни, основу которого составляет варёный рис",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Бефстроганов",
                "image" => "",
                "category_id" => "2",
                "user_id" => "1",
                "description" => "Популярное в России блюдо, названное в честь графа Александра Григорьевича Строганова. Готовится из мелко нарезанных кусочков говядины (тонкие квадратики), залитых горячим сметанным соусом.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Куриные котлеты",
                "image" => "",
                "category_id" => "2",
                "user_id" => "1",
                "description" => "Оригинальный рецепт куриных котлет со сливочным маслом, вмешанным в фарш.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Куриный бульон",
                "image" => "",
                "category_id" => "1",
                "user_id" => "1",
                "description" => "Как варить бульон из курицы, чтобы он был наваристым, но прозрачным, не слишком жирным и очень ароматным?",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Уха",
                "image" => "",
                "category_id" => "1",
                "user_id" => "1",
                "description" => "Уха – русское национальное жидкое блюдо.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Оливье",
                "image" => "",
                "category_id" => "3",
                "user_id" => "1",
                "description" => "Салат оливье — король салатов. Любой мужчина скажет: нет салата оливье, значит, нет праздника.",
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        DB::table('recipes')->insert($recipe);
    }
}
