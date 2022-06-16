<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recettes = Recette::all();

        return view('recipe.browse', compact('Recettes'));
    }



    public function top()
    {
        $Recettes = Recette::all();

        return view('recipe.categories', compact('Recettes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        Recette::Create([
            "main_image" => $request->main_image->store('recettes', 'public'),
              "title" => $request->title,
              "categorie" =>  $request->categorie, 
              "summary" => $request->summary,
              "tag" => $request->tag,  
              "video" => $request->video,  
              "ingredient" => $request->ingredient,  
              "quantite" => $request->quantite,  
              "description" =>  $request->description, 
              "temps_repos" => $request->temps_repos,  
              "temps_preparation" => $request->temps_preparation,  
              "temps_cuisson" => $request->temps_cuisson, 
              "calories" => $request->calories,  
              "carbohydrates" => $request->carbohydrates,  
              "gras" => $request->gras,  
              "potreines" => $request->potreines,  
              "cholesterole" =>  $request->cholesterole, 
              "difficulte" => $request->difficultedifficulte, 
              "budget" => $request->budget,  

         ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('recipe.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}