
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!---Font Icon-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>

<body >
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="{{ route('liste')}}"><i class="fa fa-cutlery" aria-hidden="true"></i> DELIZIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pageAccueil')}}">Accueil</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('recette.categories')}}">Top recettes</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Recettes
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('recette.categories')}}">listes des recettes</a>
                             
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                        
                            <a class="dropdown-item" href="{{ route('contacter')}}">Contact</a>
                        </div>
                    </li>
                    <div class="row"> 
                        <li class="nav-item btn-submit-recipe">
                            <a class="nav-link" href="{{ route('creer')}}"><i class="fa fa-upload"
                                    aria-hidden="true"></i> Nouvelle recettes</a>
                        </li>
                      
                    @if (Route::has('login'))
             
                    @auth
                    <li class="nav-item d-flex  ">
                    <img width="70" height="auto" class="img-fluid rounded-circle"  src="{{ Storage::url(Auth::user()->photo) }}">
                    <a id="nav-link" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>  {{ Auth::user()->name }} </a>
                        <a class="nav-link" href="{{ url('/accueil') }}"><i class="fa fa-upload"  aria-hidden="true"></i> Mon compte</a>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Déconnexion') }}
                                    </a>

                <form id="logout-form" class='d-none' action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
                      
                    </li>
                        
                    @else
                   <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-key"
                                aria-hidden="true"></i></a>
                    </li>

                        @if (Route::has('register'))
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-lock" aria-hidden="true"></i></a>
                    </li>
                        @endif
                    @endauth
            
            @endif
                   </div> 
                </ul>
            </div>
        </div>
    </nav>


    <main class="container-fluid auto-mx auto-my "> 
    @yield('main')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <h5>Delizio</h5>
                    <p>Projet créer par les DI21 afin de répondre à une besoin et appredre à être autonome et performant sans hésiter à poser de question quand il faut, la pérseverance paie .</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5>Archive</h5>
                    <ul>
                        <li><a href="{{route('pageAccueil')}}">Top Recettes</a></li>
                        <li><a href="{{route('pageAccueil')}}">Top Dessets</a></li>
                        <li><a href="{{route('pageAccueil')}}">Top Boissons</a></li>
                        <li><a href="{{route('pageAccueil')}}">Top Repas Geek</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5>Recipes</h5>
                    <ul>
                        <li><a href="{{route('pageAccueil')}}">Formulaire de contact</a></li>
                        <li><a href="{{route('pageAccueil')}}">Categories</a></li>
                        <li><a href="{{route('pageAccueil')}}l">Créer une recette</a></li>
                    </ul>
                </div>
                 
            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">  DEVELOPPER PAR ISMAIL,STAN,THEO </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>