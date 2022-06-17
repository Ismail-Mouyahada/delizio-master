 




@extends('layouts.main')

 

@section('title')

Landing Page
@endSection

@section('main')
<div class="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Filtrer les recettes</h2>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Selectionner une catégorie</label>
                                <select class="js-search-category form-control select2-hidden-accessible" name="category" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
                    <option value="1">Tous</option>
                    <option value="2">Petit-déjeuner</option>
                    <option value="3">Déjeunner</option>
                    <option value="4">Boisson</option>
                    <option value="5">Entrées</option>
                    <option value="6">Soupes</option>
                    <option value="7">Saldes</option>
                    <option value="8">Viande</option>
                    <option value="9">Poulet</option>
                    <option value="10">Jombon</option>
                    <option value="11">Fruits de mer</option>
                    <option value="12">Vegetarien</option>
                    <option value="13">Légumes</option>
                    <option value="14">Desserts</option>
                    <option value="15">Glasses</option>
                    <option value="16">Pains</option>
                    <option value="17">Repas des vacances</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category-11-container"><span class="select2-selection__rendered" id="select2-category-11-container" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Selectionner un ou plusieurs ingrédients </label>
                                <select class="js-search-ingredients form-control select2-hidden-accessible" name="ingredients[]" multiple="" data-placeholder="Included Ingredients" tabindex="-1" aria-hidden="true">
                    <option value="sugar">sucre</option>
                    <option value="wheat-flour">farine blanche</option>
                    <option value="baking-powder">louvure de gâteau</option>
                    <option value="eggs">oeufs</option><option value="salt">sel</option>
                    <option value="brown-sugar">sucre de canne</option>
                    <option value="chicken-breast">blanc de poulet</option>
                    <option value="garlic">percillard</option>
                    <option value="milk">lait</option>
                    <option value="oil">huile</option>
                    <option value="sesame-oil">huile de sesame</option>
                    <option value="soy-sauce">sauce soja</option>
                    <option value="butter">beurre</option>
                    <option value="carrots">carrottes</option>
                    <option value="coconut-flakes">coconut flakes</option>
                    <option value="honey">miel</option>
                    <option value="mung-bean-sprouts">mung bean sprouts</option>
                    <option value="noodles">noodles</option>
                    <option value="onion">ongion</option>
                    <option value="potato-starch">épulchés de potato</option>
                    <option value="red-bell-pepper">pigment rouge</option>
                    <option value="walnuts">walnuts</option>
                    <option value="water">eau</option>
                    <option value="almonds">amandes</option>
                    <option value="baking-soda">soda de cuisson</option>
                    <option value="beef-brisket">beef brisket</option>
                    <option value="beef-sirloin">beef sirloin</option>
                    <option value="bell-pepper">bell pepper</option>
                    <option value="broth">broth</option>
                    <option value="carrot">carrot</option>
                    <option value="cherries">cherries</option>
                    <option value="chocolate">chocolate</option>
                    <option value="cinnamon">cinnamon</option>
                    <option value="cinnamon-stick">cinnamon stick</option>
                    <option value="cocoa-powder">cocoa powder</option>
                    <option value="coconut">coconut</option>
                    <option value="corn-tortillas">corn tortillas</option>
                    <option value="dark-chocolate">dark chocolate</option>
                    <option value="dried-black-mushrooms">dried black mushrooms</option>
                    <option value="dried-soba">dried soba</option>
                    <option value="egg">egg</option>
                    <option value="five-spice-powder">five spice powder</option>
                    <option value="flour">flour</option>
                    <option value="ginger">ginger</option>
                    <option value="guilin-chili-sauce">guilin chili sauce</option>
                    <option value="leek">leek</option>
                    <option value="lettuce">lettuce</option>
                    <option value="olive-oil">olive oil</option>
                    <option value="oyster-sauce">oyster sauce</option>
                    <option value="pear-juice">pear juice</option>
                    <option value="pepper">pepper</option>
                    <option value="pineapple">pineapple</option>
                    <option value="red-onion">red onion</option>
                    <option value="redcurrant">redcurrant</option>
                    <option value="ribs-of-celery">ribs of celery</option>
                    <option value="sichuan-pepper">Sichuan pepper</option>
                    <option value="spring-onions">spring onions</option>
                    <option value="strawberries">strawberries</option>
                    <option value="taiwanese-golden-mushrooms">Taiwanese golden mushrooms</option>
                    <option value="yeast">yeast</option>
                    <option value="yellow-bell-pepper">yellow bell pepper</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 540px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Included Ingredients" style="width: 538px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>la recette devrait avoir</label>
                                <select class="js-search-category2 form-control select2-hidden-accessible" name="category" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
                    <option value="1">Tous les ingrédients selectionnées </option>
                    <option value="2">Un ou plusieurs ingrédients selectionnées</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category-zu-container"><span class="select2-selection__rendered" id="select2-category-zu-container" title="All of selected ingredients ">All of selected ingredients </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Search by Keyword">
                                <button type="submit" class="btn">Chercher des recettes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> Toutes les recettes</h5>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe2.jpg" alt=""></a>
                        <h2><a href="#">Milk fruit fresh with vegetables </a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="tag">
                            <a href="#">Milk</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe3.jpg" alt=""></a>
                        <h2><a href="#">Pink Happy Pia Chocolate Sweet</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="tag">
                            <a href="#">Chocolate</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe4.jpg" alt=""></a>
                        <h2><a href="#">Tasty Muffin Sweet Tin Lunches</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="tag">
                            <a href="#">Muffin</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe5.jpg" alt=""></a>
                        <h2><a href="#">Chickpea Recipes to Make Your Heart Happy</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="tag">
                            <a href="#">Chicken</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe6.jpg" alt=""></a>
                        <h2><a href="#">Cornbread Topped Cast-Iron Skillet Chili</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="tag">
                            <a href="#">Corn</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="#"><img src="images/recipe7.jpg" alt=""></a>
                        <h2><a href="#">Easy Vegan Weeknight Dinner Recipes</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="tag">
                            <a href="#">Vegan</a>
                            <a href="#">Lemon</a>
                            <a href="#">Sayur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-load">Load More</a>
                </div>
            </div>
        </div>
    </div>


    @endSection