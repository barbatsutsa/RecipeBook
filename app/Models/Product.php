<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "id";

    protected $fillable = ['name'];


    public function getAll()
    {
        return \DB::select("select id, name from products order by name");
    }
}
