<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $table = "measures";
    protected $primaryKey = "id";

    protected $fillable = ['name', 'sign'];

    public function getAll()
    {
        return \DB::select("select id, sign from measures");
    }
}
