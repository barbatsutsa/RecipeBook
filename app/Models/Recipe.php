<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = "recipes";

    public function getAll(): array
    {
        return \DB::table($this->table)->select('id', 'name', 'description')->orderBy('name', 'desc')->get()->toArray();
    }

    public function getById(int $id)
    {
        return \DB::table($this->table)->find($id);
    }
}
