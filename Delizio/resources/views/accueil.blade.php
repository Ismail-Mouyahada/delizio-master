
@extends('layouts.main')
@section('title')
    Espace utilisateur
@endSection

@section('main')

    <div class="container-fluid   py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-warning">

                <h4 class="text-center text-white">     {{ __('Tableau de bord') }} </h4>

                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                         

                        {{ __('vous êtes connectés!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
