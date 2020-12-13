<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = ['title'];


    public function getAll(): array
    {
        return \DB::select("select id, title from categories");
    }

    public function getById(int $id)
    {
        return \DB::selectOne("select id, title from categories where id = :id",
            ['id' => $id]);
    }
}
