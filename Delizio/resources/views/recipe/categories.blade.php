 




@extends('layouts.main')

 

@section('title')

Landing Page
@endSection

@section('main')
<div class="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Browse Recipes</h2>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Choose category</label>
                                <select class="js-search-category form-control select2-hidden-accessible" name="category" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
                    <option value="1">All</option>
                    <option value="2">Breakfast</option>
                    <option value="3">Lunch</option>
                    <option value="4">Beverages</option>
                    <option value="5">Appetizers</option>
                    <option value="6">Soups</option>
                    <option value="7">Salads</option>
                    <option value="8">Beef</option>
                    <option value="9">Poultry</option>
                    <option value="10">Pork</option>
                    <option value="11">Seafood</option>
                    <option value="12">Vegetarian</option>
                    <option value="13">Vegetables</option>
                    <option value="14">Desserts</option>
                    <option value="15">Canning / Freezing</option>
                    <option value="16">Breads</option>
                    <option value="17">Holidays</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category-11-container"><span class="select2-selection__rendered" id="select2-category-11-container" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Select one or more ingredients that should be included in recipe</label>
                                <select class="js-search-ingredients form-control select2-hidden-accessible" name="ingredients[]" multiple="" data-placeholder="Included Ingredients" tabindex="-1" aria-hidden="true">
                    <option value="sugar">sugar</option>
                    <option value="wheat-flour">wheat flour</option>
                    <option value="baking-powder">baking powder</option>
                    <option value="eggs">eggs</option><option value="salt">salt</option>
                    <option value="brown-sugar">brown sugar</option>
                    <option value="chicken-breast">chicken breast</option>
                    <option value="garlic">garlic</option>
                    <option value="milk">milk</option>
                    <option value="oil">oil</option>
                    <option value="sesame-oil">sesame oil</option>
                    <option value="soy-sauce">soy sauce</option>
                    <option value="butter">butter</option>
                    <option value="carrots">carrots</option>
                    <option value="coconut-flakes">coconut flakes</option>
                    <option value="honey">honey</option>
                    <option value="mung-bean-sprouts">mung bean sprouts</option>
                    <option value="noodles">noodles</option>
                    <option value="onion">onion</option>
                    <option value="potato-starch">potato starch</option>
                    <option value="red-bell-pepper">red bell pepper</option>
                    <option value="walnuts">walnuts</option>
                    <option value="water">water</option>
                    <option value="almonds">almonds</option>
                    <option value="baking-soda">baking soda</option>
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
                                <label>Recipe needs to have</label>
                                <select class="js-search-category2 form-control select2-hidden-accessible" name="category" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
                    <option value="1">All of selected ingredients </option>
                    <option value="2">Any of selected ingredients</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 255px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category-zu-container"><span class="select2-selection__rendered" id="select2-category-zu-container" title="All of selected ingredients ">All of selected ingredients </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Search by Keyword">
                                <button type="submit" class="btn">Search Recipes</button>
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
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> All Recipes</h5>
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