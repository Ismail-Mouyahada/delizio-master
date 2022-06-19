 @extends('layouts.main')
@section('title')
   Remerciement
@endsection

@section('main')

@if (session()->has('message'))
    <script>
       setTimeout(function() {
           window.location.href = "{{route('pageAccueil')}}";
       }, 2000); // 2 second
    </script>
@endif

<div class="wrapper py-5">
<div class="jumbotron text-center  ">
  <h1 class="display-3">Merci à vous</h1>
  <p class="lead"><strong>Veuillez garder un oeil sur votre boîte mail</strong>pour en savoir plus sur l'avancement de votre demande</p>
  <hr>
  <p>
       <a  class="btn btn-warning text-white" href="{{route('pageAccueil')}}">Page d'Accueil</a>
</div>
</div>

  
@endsection