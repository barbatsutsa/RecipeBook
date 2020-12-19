<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
        ];
    protected $table = "recipes";
    protected $primaryKey = "id";

    protected $fillable = ['name', 'image', 'show', 'category_id', 'user_id', 'description'];

    public function getAll()
    {
        return \DB::table($this->table)->select('id', 'name', 'description', 'created_at')->orderBy('name', 'desc')->get()->toArray();
    }

    public function getById(int $id)
    {
        /*return \DB::table($this->table)
            ->leftJoin('categories', 'category_id', '=', 'categories.id')
            ->leftJoin('users', 'user_id', '=', 'users.id')
            ->where('id', '=', $id)
            ->get();*/

        return \DB::selectOne("select recipes.id, recipes.name, recipes.image, recipes.category_id, recipes.user_id, recipes.show, recipes.description, categories.title from recipes left join categories on categories.id = recipes.category_id where recipes.id = :id", ['id' => $id]);
    }

    public function getByCategory(int $category_id)
    {
        return \DB::table($this->table)->select('id', 'name', 'description', 'created_at')->where('category_id', '=', $category_id)->orderBy('name', 'desc')->get()->toArray();
    }
}
