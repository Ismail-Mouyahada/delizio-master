 @extends('layouts.main')
@section('title')
   Bienvenue
@endSection

@section('main')
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/recipe1-1920x600.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><a href="recipe-detail.html">The Classic Burger Recipe</a></h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="recipe-detail.html" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/recipe2-1920x600.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><a href="recipe-detail.html">Spanish Mac & Cheese</a></h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="recipe-detail.html" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/recipe3-1920x600.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1><a href="recipe-detail.html">Skillet Scalloped Potatoes</a></h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="recipe-detail.html" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Top Recipes -->
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> Top Breakfast Recipes</h5>
                    <div class="box clearfix">
                        <a href="recipe-detail.html"><img src="images/square-recipes1.jpg" alt=""></a>
                        <h3><a href="recipe-detail.html">Cinnamon Baked Doughnuts</a></h3>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> Top Lunch Recipes</h5>
                    <div class="box clearfix">
                        <a href="recipe-detail.html"><img src="images/square-recipes2.jpg" alt=""></a>
                        <h3><a href="recipe-detail.html">Fruit Mix With Lemon Gravy</a></h3>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> Top Dinner Recipes</h5>
                    <div class="box clearfix">
                        <a href="recipe-detail.html"><img src="images/square-recipes3.jpg" alt=""></a>
                        <h3><a href="recipe-detail.html">Red Cilly Sauce Cheese</a></h3>
                        <p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- List Recipes -->
    <div class="list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5><i class="fa fa-cutlery" aria-hidden="true"></i> List Recipes</h5>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="box grid recipes">
                        <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                        <a href="recipe-detail.html"><img src="images/recipe2.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Milk fruit fresh with vegetables </a></h2>
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
                        <a href="recipe-detail.html"><img src="images/recipe3.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Pink Happy Pia Chocolate Sweet</a></h2>
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
                        <a href="recipe-detail.html"><img src="images/recipe4.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Tasty Muffin Sweet Tin Lunches</a></h2>
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
                        <a href="recipe-detail.html"><img src="images/recipe5.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Chickpea Recipes to Make Your Heart Happy</a></h2>
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
                        <a href="recipe-detail.html"><img src="images/recipe6.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Cornbread Topped Cast-Iron Skillet Chili</a></h2>
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
                        <a href="recipe-detail.html"><img src="images/recipe7.jpg" alt=""></a>
                        <h2><a href="recipe-detail.html">Easy Vegan Weeknight Dinner Recipes</a></h2>
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
    <!-- Footer -->
 
  
@endsection