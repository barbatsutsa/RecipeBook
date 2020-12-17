<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = ['title'];


    public function getAll()
    {
        return \DB::select("select id, title from categories");
    }

    public function getById(int $id)
    {
        return \DB::selectOne("select id, title from categories where id = :id",
            ['id' => $id]);
    }
}
