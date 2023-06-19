@extends('layouts.base')

@section('titre','créer un participant')

@section('content')
<div class="container">
    {{--!empty($participan) ? $participan ->user: ''--}}
    <form action="{{route('participants.store')}}" method="POST">
        @csrf
        <div>
            <div>
                <label for="name">Nom</label><br>
                <input name="nom" class="@error('nom') is-invalid @enderror"/>
                @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="text" name="nom" id="name" placeholder="Nom" value="{{!empty($participan) ? $participan ->user->nom: ''}}">
        </div>
        <div>
            <label for="prenom">prenom</label><br>
            <div>
                <input name="prenom" class="@error('prenom') is-invalid @enderror"/>
                    @error('prenom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <input type="text" name="prenom" id="prenom" placeholder="prenom" value="{{!empty($participan) ? $participan ->user->prenom: ''}}">
        </div>
        <div>
            <div>
                <label for="email">Email</label><br>
                <input name="email" class="@error('email') is-invalid @enderror"/>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <input type="text" name="email" id="email" placeholder="Email" value="{{!empty($participan) ? $participan ->user->email: ''}}">
        </div>
        <div>
            <label for="password">Mot de passe</label><br>
            <input type="text" name="mot_de_passe" id="password" placeholder="password" value="{{!empty($participan) ? $participan ->user->mot_de_passe: ''}}">
        </div>
        <div>
            <label for="Contact">Contact</label><br>
            <input type="text" name="contact" id="Contact" placeholder="Contact" value="{{!empty($participan) ? $participan ->user->contact: ''}}">
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>

</div>
