
@extends('layouts.main')
@section('title')
    Espace utilisateur
@endSection

@section('main')

    <div class="container-fluid   py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">

                <h5 class="text-center text-warning">     {{ __('Tableau de bord') }} </h5>
                <p class="text-center text-white">     {!! __('Bienvenue <strong>'.Auth::User()->name .'</strong> !') !!} </p>

                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                         

                   



                        <table class="table">
                        <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Profil</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Prnéom</th>
                          <th scope="col">Pseudo</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Satut</th>
                          <th scope="col">Inscrit</th>
                          <th scope="col">Actions</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dataUsers as $user)
                        <tr>
                          <th scope="row">{{ $user->id}}</th>
                          <th scope="row"> <img  width=60 height=60 class=" img-fluid rounded-circle" src="{{ Storage::url($user->photo)}}" alt="avatar"></th>
                          <th scope="row">{{ $user->name}}</th>
                          <th scope="row">{{ $user->surname}}</th>
                          <th scope="row">{{ $user->username}}</th>
                          <th scope="row">{{ $user->email}}</th>
                          <th scope="row">{{ __('Admin')}}</th>
                          <th scope="row">{{ $user->created_at}}</th>
                          <th scope="row"> 

                            <button class="btn btn-dark" type="submit"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>


                          </th>
                      </tr>
                      @endforeach
                    
 
                        </tbody>
                        </table>

                        <table class="table">
                        <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
