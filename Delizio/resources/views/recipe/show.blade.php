
@extends('layouts.main')
@section('title')
    Details de la recettes
@endSection

@section('main')

    <!-- Detail Recipes-->
    <div class="recipe-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Oct 30, 2018</h4>
                    <h1>Roast Chicken With Lemon Gravy</h1>
                    <div class="by"><i class="fa fa-user" aria-hidden="true"></i> Gerina Amy</div>
                </div>
                <div class="col-lg-8">


                    <img src="images/recipe1.jpg" alt="">


                    <div class="info">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <p>Serves:</p>
                                <p><strong><i class="fa fa-users" aria-hidden="true"></i> 4 people</strong></p>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <p>Prep Time:</p>
                                <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i> 30 min</strong></p>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <p>Cooking:</p>
                                <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i> 1 Hour</strong></p>
                            </div>
                        </div>
                    </div>


                    <p>Lorem ipsum dolor sit amet, usu eu vocibus laboramus appellantur, pro no natum ullum omittam. Mei vitae utinam complectitur eu. Te usu cibo vulputate. Id propriae adipisci pro. Legere nominati ut mel, natum libris at vix.</p>

                    <div class="tag">
                        <a href="#">Chicken</a>
                        <a href="#">Lemon</a>
                        <a href="#">Sayur</a>
                    </div>

                    <div class="ingredient-direction">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <h3>Ingredients</h3>
                                <ul class="ingredients">
                                    <li>
                                        3 Slice Chicken
                                    </li>
                                    <li>
                                        2 cubes beef bouillon, crumbled
                                    </li>

                                    <li>
                                        2 pounds cubed beef stew meat
                                    </li>
                                    <li>
                                        3 tablespoons vegetable oil
                                    </li>

                                    <li>
                                        1 large onion, chopped
                                    </li>

                                    <li>
                                        1 teaspoon dried rosemary
                                    </li>

                                    <li>
                                        1/2 teaspoon ground black pepper
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <h3>Directions</h3>
                                <ol class="directions">
                                    <li>Mei latine maluisset constituam ut. Eum vero vocibus at, minim debet deterruisset cum ei. Soluta virtute tibique cu quo, his vivendo suscipit ea. Legere fabulas pro ea.</li>
                                    <li>An unum soluta eos, audire meliore te nam. Mundi choro sensibus ut vim, ut sed errem ludus tractatos, eu vix fierent definiebas. Ad est autem appareat. Vim ne latine interpretaris, eum sensibus mediocritatem cu. </li>
                                    <li>Est an etiam cetero fierent. At sit primis evertitur. Est prima electram voluptatum ne. Nec id atqui contentiones mediocritatem, ut mel enim soleat audire, tecripta consequat ea.</li>
                                    <li>Vidit mutat periculis sed ex, ex mel nihil suscipiantur. Brute noster aeterno et eum, mea et idque primis repudiare.</li>
                                </ol>
                            </div>
                        </div>
                    </div>



                    <div class="nutrition-facts clearfix">
                        <h3>Nutrition Facts</h3>
                        <div>
                            <p>Calories:</p>
                            <p><strong>632 kcal</strong></p>
                        </div>
                        <div>
                            <p>Carbohydrate:</p>
                            <p><strong>37 g</strong></p>
                        </div>
                        <div>
                            <p>Fat:</p>
                            <p><strong>92 g</strong></p>
                        </div>
                        <div>
                            <p>Protein:</p>
                            <p><strong>63 g</strong></p>
                        </div>
                        <div>
                            <p>Cholesterol:</p>
                            <p><strong>0 mg</strong></p>
                        </div>

                    </div>


                    <div class="blog-comment">
                        <h3>3 Comments</h3>
                        <hr/>
                        <ul class="comments">
                            <li>
                                <div class="post-comments">
                                    <p class="meta">Dec 1, 2018 &#8212; <a href="#">Deks</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                    <p>
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="post-comments">
                                    <p class="meta">Dec 1, 2018 &#8212; <a href="#">Suto</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet
                                    </p>
                                </div>
                                <ul class="comments">
                                    <li>
                                        <div class="post-comments">
                                            <p class="meta">Dec 2, 2018 &#8212; <a href="#">Most</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="reply">
                            <h3>Leave a Reply</h3>
                            <form method="post" id="commentform" class="comment-form">
                                <p class="comment-form-comment">
                                    <textarea class="form-control" id="comment" name="comment" cols="45" rows="5" aria-required="true"></textarea>
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input class="form-control" id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input class="form-control" id="email" name="email" type="text" value="" size="30" maxlength="100" aria-required="true" required="required">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <input class="form-control" id="url" name="url" type="text" value="" size="30" maxlength="200">
                                        </p>
                                    </div>
                                </div>
                                <p class="form-submit">
                                    <input class="btn btn-submit btn-block" name="submit" type="submit" id="submit" value="Post Comment">
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endSection