<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeCreateRequest;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $rec = new Recipe();
        $recipes = $rec->getAll();
        return view('recipes.index', [
            'recipesList'   => $recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RecipeCreateRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();

            $upload = $file->storeAs('recipe', $name);
            if($upload) {
                $data['image'] = $upload;
            }
        }

        $recipe = Recipe::create($data);
        if ($recipe) {
            return redirect()->route('index')->with('success', 'Рецепт успешно добавлен');
        }

        return back()->with('error', 'Не удалось добавить рецепт');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    //public function show(Recipe $recipe)
    public function show($id)
    {
        $rec = new Recipe();
        $recipeShow = $rec->getById($id);
        $ingr = new Ingredient();
        $ingredients = $ingr->getIngredients($recipeShow->id);

        if(empty($recipeShow)) {
            abort(404, 'Recipe not found');
        }
        return view('recipes.show', [
            'recipe'       => $recipeShow,
            'ingredients'  => $ingredients
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(RecipeCreateRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function showCategory($category_id)
    {
        $rec = new Recipe();
        $recipes = $rec->getByCategory($category_id);
        return view('recipes.index', [
            'recipesList'   => $recipes
        ]);
    }
}
