@extends('layouts.main')

 

@section('title')
Prise de contact
@endSection

@section('main')
     <div class="page contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 title text-center">
                    <h1>Contact</h1>
                </div>
                <div class="col-lg-8 content">
                    <form method="POST">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Adresse E-mail</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Subjet</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" required="required" placeholder="Saisissez votre message ici"></textarea>
                        </div>
                        <button type="submit" class="btn">Envoyez un message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection