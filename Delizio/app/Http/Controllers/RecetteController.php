<?php

namespace App\Http\Controllers;



use App\Models\User;
use App\Models\Recette;
use App\Models\ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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

        return view('recipe.categories', compact('Recettes'));
    }



    public function categorie()
    {
        $Ingredients = ingredient::all();
        $Recettes = Recette::all();


        return view('recipe.categories', compact('Recettes', 'Ingredients'));
    }


    public function topRecettes(Request $request)
    {

        $Ingredients = ingredient::all();
        $Recettes = Recette::all();


        $TopRecettes = DB::table('recettes')->where('title', 'LIKE', '%' . $request->data . "%")->get();

        //$TopRecettes = Recette::whereIn('title', [$request->data])->get();



        return view('recipe.categories', compact('TopRecettes', 'Recettes', 'Ingredients'));
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


    protected function validator(Request $request)
    {
        return Validator::make($request, [



            "main_image" => ['required', 'mimes:png,jpg,svg,jpeg,webp', 'max:255', 'unique:users'],
            "title" => ['required', 'string', 'max:255'],
            "categorie" =>  ['required', 'string', 'max:255'],
            "summary" => ['required', 'text'],
            "tag" => ['required', 'string', 'max:40'],
            "video" => ['required', 'string', 'max:255'],
            "ingredient" => ['required', 'text'],
            "quantite" => ['required', 'integer'],
            "description" =>  ['required', 'text'],
            "temps_repos" => ['required', 'integer'],
            "temps_preparation" => ['required', 'integer'],
            "temps_cuisson" => ['required', 'integer'],
            "calories" => ['required', 'integer'],
            "carbohydrates" => ['required', 'integer'],
            "gras" => ['required', 'integer'],
            "potreines" => ['required', 'integer'],
            "cholesterole" => ['required', 'integer'],
            "difficulte" => ['required', 'integer'],
            "budget" => ['required', 'integer'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request);

        Recette::create([

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
            "difficulte" => $request->difficulte,
            "budget" => $request->budget,
            "user_id" =>  Auth::user()->id,
            "categorie_id" =>  $request->categorie,

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

        $recette = Recette::findOrFail($id);

        return view('recipe.show', compact('recette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recette = Recette::findOrFail($id);

        return view('recipe.edit', compact('recette'));
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
        $recette = Recette::find($id);


        dd($recette);

        $recette =   User::where("id", $id)->update([

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
            "difficulte" => $request->difficulte,
            "budget" => $request->budget,
        ])->save();

        return view(url('Recette/details/' . $recette->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        $Recette = Recette::find($id);
        $Recette->delete();
        return redirect()->route('pageAccueil')->with('message', 'la recette a été supprimée avec succès 😥');
    }


    public function likeRecette($id)
    {
        $recette = Recette::find($id);
        $recette->like();
        $recette->save();

        return redirect()->route('pageAccueil')->with('message', 'Vous avez liké la recette!');
    }

    public function unlikeRecette($id)
    {
        $recette = Recette::find($id);
        $recette->unlike();
        $recette->save();

        return redirect()->route('pageAccueil')->with('message', 'Vous avez disliké la recette!');
    }
}
