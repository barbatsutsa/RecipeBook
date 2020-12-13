<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $table = "ingredients";
    protected $primaryKey = "id";

    protected $fillable = ['recipe_id', 'product_id', 'measure_id', 'amount'];

    public function getIngredients(int $recipe_id)
    {
        return \DB::table($this->table)
            ->join('measures', 'ingredients.measure_id', '=', 'measures.id')
            ->join('products', 'ingredients.product_id', '=', 'products.id')
            ->select('products.name', 'ingredients.amount', 'measures.sign')
            ->where('ingredients.recipe_id', '=', $recipe_id)
            ->get();

    }



}
