@extends('layouts.main')



@section('title')
    Soumession des recettes
@endSection

@section('main')
    <!-- Submit Recipe-->
    <div class="submit">
        <div class="title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Soumession de la recette</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <form method='POST' action='/recette/modifier' enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <label>Titre la recette</label>
                                <input type="text" name="title" value="{{($recette->title)}}" class="form-control">
                                 @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Catégorie</label>
                                <select class="js-search-category form-control" name="categorie"
                                    data-placeholder="choisssez une catégorie" >
                                    <option value="1"{{($recette->categorie === '1') ? 'Selected' : ''}}>Non catégorisé</option>
                                    <option value="2"{{($recette->categorie === '2') ? 'Selected' : ''}}>Petit-déjeuné</option>
                                    <option value="3"{{($recette->categorie === '3') ? 'Selected' : ''}}>Déjeuné</option>
                                    <option value="4"{{($recette->categorie === '4') ? 'Selected' : ''}}>Boissons</option>
                                    <option value="5"{{($recette->categorie === '5') ? 'Selected' : ''}}>Entrée</option>
                                    <option value="6"{{($recette->categorie === '6') ? 'Selected' : ''}}>Soupes</option>
                                    <option value="7"{{($recette->categorie === '7') ? 'Selected' : ''}}>Salade</option>
                                    <option value="8"{{($recette->categorie === '8') ? 'Selected' : ''}}>Viande</option>
                                    <option value="9"{{($recette->categorie === '9') ? 'Selected' : ''}}>Poulet</option>
                                    <option value="10"{{($recette->categorie === '10') ? 'Selected' : ''}}>Jambon</option>
                                    <option value="11"{{($recette->categorie === '11') ? 'Selected' : ''}}>Fruit de mer</option>
                                    <option value="12"{{($recette->categorie === '12') ? 'Selected' : ''}}>Végétarien</option>
                                    <option value="13"{{($recette->categorie === '13') ? 'Selected' : ''}}>légumes</option>
                                    <option value="14"{{($recette->categorie === '14') ? 'Selected' : ''}}>Desserts</option>
                                    <option value="15"{{($recette->categorie === '15') ? 'Selected' : ''}}>Glasses et suceries</option>
                                    <option value="16"{{($recette->categorie === '16') ? 'Selected' : ''}}>Pains</option>
                                    <option value="17"{{($recette->categorie === '17') ? 'Selected' : ''}}>Repas de vacances</option>
                                    <option value="17"{{($recette->categorie === '18') ? 'Selected' : ''}}>Pâtisserie</option>
                                </select>
                                 @error('categorie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Résumé</label>
                                <textarea class="form-control" rows="4"  name="summary" required="required">{{($recette->summary)}}</textarea>
                                 @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Etiquette</label>
                                <input type="text" name="tag" class="form-control" value="{{($recette->tag)}}">
                                 @error('tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>lien de video</label>
                                <input type="text" name="video" class="form-control" value="{{($recette->video)}}">
                                 @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for='main_image'>Image de base</label>
                                 
                                 
                                <input type="file" name="main_image" class="form-control dropzone" id="dropzone"   value="{{$recette->main_image}}">

                                <img src="{{url($recette->main_image)}}" class="img-fluid " height=200 width=200>
                                 @error('main_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Ingredients:</label>

                                <div id="sortable">
                                    <div class="box ui-sortable-handle">
                                        <div class="row">
                                            <div class="col-lg-1 col-sm-1">
                                                <i class="fa fa-arrows" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" name="ingredient" class="form-control"
                                                    placeholder="Nom de l'ingredient" value="{{($recette->ingredient)}}">
                                                     @error('ingredient')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                     @enderror
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" value="{{($recette->quantite)}}" name="quantite" class="form-control"
                                                    placeholder="Quantité ou information additionnelle">
                                                     @error('quantite')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                     @enderror
                                            </div>
                                            <div class="col-lg-1 col-sm-1">
                                                <i class="fa fa-times-circle-o minusbtn" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <a href="#" class="btn btn-light">Ajouter un nouveau ingredient</a>

                            </div>

                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" name="description" rows="4" required="required">{{($recette->description)}}</textarea>
                                 @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Informations supplimentaires</label>
                                <hr>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Repos</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_repos" class="form-control" value="{{($recette->temps_repos)}}">
                                </div>
                                @error('temps_repos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Temps de préparation</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_preparation" class="form-control" value="{{($recette->temps_preparation)}}">
                                </div>
                                @error('temps_preparation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Temps de cuisson</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_cuisson" class="form-control" value="{{($recette->temps_cuisson)}}">
                                </div>
                                @error('temps_cuisson')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Valeur Alimentaire</label>
                                <hr>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Calories</label>
                                <div class="col-sm-10">
                                    <input type="number" name="calories" class="form-control" value="{{($recette->calories)}}">
                                    @error('calories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Carbohydrates</label>
                                <div class="col-sm-10">
                                    <input type="number" name="carbohydrates" class="form-control"   value="{{($recette->carbohydrates)}}">
                                    @error('carbohydrates')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gras</label>
                                <div class="col-sm-10">
                                    <input type="number" name="gras" class="form-control"  value="{{($recette->gras)}}">
                                    @error('gras')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Proteines</label>
                                <div class="col-sm-10">
                                    <input type="number" name="potreines" class="form-control"  value="{{($recette->proteines)}}">
                                    @error('potreines')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cholesterol (g)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="cholesterole" class="form-control"  value="{{($recette->cholesterole)}}">
                                    @error('cholesterole')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveau de diffculté</label>
                                <div class="col-sm-10">
                                    <select class="js-search-category form-control" name="difficulte"
                                        data-placeholder="selectionnez la difficulté">
                                
                                        <option {{($recette->difficulte === '1') ? 'Selected' : ''}} value="1">Facile</option>
                                        <option {{($recette->difficulte === '2') ? 'Selected' : ''}} value="2">Moyenne</option>
                                        <option {{($recette->difficulte === '3') ? 'Selected' : ''}} value="3">Difficile</option>
                                    </select>
                                    @error('difficulte')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Budget (€ coût par personne)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="budget" class="form-control" placeholder="Coût total de la recette pour 1 personne" value="{{($recette->budget)}}">
                                    <span>Ceci est utilisé pour calculer le coût total lors de pluseieurs personnes</span>

                                    @error('budget')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror

                                </div>
                            </div>


                            <button type="submit" class="btn btn-submit">Soumettre la recette</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endSection
