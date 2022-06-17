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
            <form method='POST' action='/recette/enregistrer' enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <label>Titre la recette</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Catégorie</label>
                                <select class="js-search-category form-control" name="categorie"
                                    data-placeholder="choisssez une catégorie">
                                    <option value="1">tous</option>
                                    <option value="2">Petit-Déjeuné</option>
                                    <option value="3">Déjouné</option>
                                    <option value="4">Boissons</option>
                                    <option value="5">Entrées</option>
                                    <option value="6">Soupes</option>
                                    <option value="7">Salades</option>
                                    <option value="8">Viande</option>
                                    <option value="9">Poulet</option>
                                    <option value="10">Jambon</option>
                                    <option value="11">Fruit de mer</option>
                                    <option value="12">Végétarien</option>
                                    <option value="13">légumes</option>
                                    <option value="14">Desserts</option>
                                    <option value="15">Glasses et suceries</option>
                                    <option value="16">Pains</option>
                                    <option value="17">Vacances</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Résummée</label>
                                <textarea class="form-control" rows="4" name="summary" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Etiquette</label>
                                <input type="text" name="tag" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>lien de video</label>
                                <input type="text" name="video" class="form-control">
                            </div>


                            <div class="form-group">
                                <label>Téléverser les images</label>
                                <input type="file" name="main_image" class="form-control-file">
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
                                                    placeholder="Nom de l'ingredient">
                                            </div>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" name="quantite" class="form-control"
                                                    placeholder="Quantité ou information additionnelle">
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
                                <textarea class="form-control" name="description" rows="4" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Informations supplimentaires</label>
                                <hr>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Repos</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_repos" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Temps de préparation</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_preparation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Temps de cuisson</label>
                                <div class="col-sm-10">
                                    <input type="number" name="temps_cuisson" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Valeur Alimentaire</label>
                                <hr>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Calories</label>
                                <div class="col-sm-10">
                                    <input type="number" name="calories" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Carbohydrates</label>
                                <div class="col-sm-10">
                                    <input type="number" name="carbohydrates" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gras</label>
                                <div class="col-sm-10">
                                    <input type="number" name="gras" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Proteines</label>
                                <div class="col-sm-10">
                                    <input type="number" name="potreines" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cholesterol</label>
                                <div class="col-sm-10">
                                    <input type="number" name="cholesterole" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Niveau de diffculté</label>
                                <div class="col-sm-10">
                                    <select class="js-search-category form-control" name="difficulte"
                                        data-placeholder="selectionnez la difficulté">
                                        <option value=""></option>
                                        <option value="1">facile</option>
                                        <option value="2">Moyenne</option>
                                        <option value="3">Défficile</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Budget (€)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="budget" class="form-control" placeholder="Coût total de la recette pour 1 personne">
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
