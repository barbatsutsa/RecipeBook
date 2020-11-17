<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = "recipes";
    protected $primaryKey = "id";

    protected $fillable = ['name', 'category_id', 'user_id', 'description'];

    public function getAll(): array
    {
        return \DB::table($this->table)->select('id', 'name', 'description')->orderBy('name', 'desc')->get()->toArray();
    }

    public function getById(int $id)
    {
        return \DB::table($this->table)
            ->leftJoin('categories', 'category_id', '=', 'categories.id')
            ->leftJoin('users', 'user_id', '=', 'users.id')
            ->where('id', '=', $id)
            ->get();

        //return \DB::selectOne("select recipes.name, recipes.image, recipes.user_id, recipes.show, recipes.description, categories.title from recipes left join categories on categories.id = recipes.category_id where recipes.id = :id", ['id' => $id]);
    }
}
