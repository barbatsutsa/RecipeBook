<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientCreateRequest;
use App\Models\Ingredient;
use App\Models\Measure;
use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($recipe_id)
    {
        $meas = new Measure();
        $measures = $meas->getAll();
        $prod = new Product();
        $products = $prod->getAll();
        $rec = new Recipe();
        $recipe = $rec->getById($recipe_id);
        $ingr = new Ingredient();
        $ingredients = $ingr->getIngredients($recipe_id);

        return view('recipes.ingredients', [
            'recipe'        => $recipe,
            'measures'      => $measures,
            'products'      => $products,
            'ingredients'   => $ingredients
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientCreateRequest $request)
    {
        $data = $request->validated();
        $ingredient = Ingredient::create($data);
        if ($ingredient) {
            if ($request->add) {
                return redirect()->route('ingredients.create', $ingredient->recipe_id);
            } else {
                return redirect()->route('recipe', $ingredient->recipe_id);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
