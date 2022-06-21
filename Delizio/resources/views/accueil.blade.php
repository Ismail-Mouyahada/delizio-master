@extends('layouts.main')
@section('title')
    Espace utilisateur
@endsection

@section('main')
    <div class="container-fluid   py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">

                        <h5 class="text-center text-warning"> {{ __('Tableau de bord') }} </h5>
                        <p class="text-center text-white"> {!! __('Bienvenue <strong>' . Auth::User()->name . '</strong> !') !!} </p>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead class="thead-warning text-text">
                                <caption>Liste des messages</caption>
                            </thead>
                            <thead class="thead-Dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profil</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Satut</th>
                                    <th scope="col">Inscrit</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataUsers as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <th scope="row"> <img width=60 height=60 class=" img-fluid rounded-circle"
                                                src="{{ Storage::url($user->photo) }}" alt="avatar"></th>
                                        <th scope="row">{{ $user->name }}</th>
                                        <th scope="row">{{ $user->surname }}</th>
                                        <th scope="row">{{ $user->username }}</th>
                                        <th scope="row">{{ $user->email }}</th>
                                        <th scope="row">
                                            @if ($user->is_admin == true)
                                                <i class="fa fa-chess-king text-warning h4" data-toggle="tooltip"
                                                    title="Administrateur"></i>
                                            @else
                                                <i class='fa fa-mask text-warning'></i>
                                            @endif
                                        </th>
                                        <th scope="row">{{ $user->created_at }}</th>
                                        <th scope="row">

                                            <button class="btn btn-warning text-white" type="submit"><i
                                                    class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fa fa-trash"></i></button>


                                        </th>
                                    </tr>
                                @endforeach
                                <thead> list des utilisateurs</thead>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead class="header-warning  ">
                                <caption>Liste des messages</caption>
                            </thead>
                            <thead class="thead-dark  ">
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Expiditeur</th>
                                    <th scope="col">Sujet</th>
                                    <th scope="col">details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{ $message->created_at }}</th>
                                        <td>{{ $message->nom }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->sujet }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
