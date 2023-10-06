@extends('layout.layout')
@extends('layout.nav')
@section('content')

<div class="container" style="margin-top:30px;">
    <form method="POST" action="{{ route('add.stagiaire') }}">
        @csrf 
        @method('POST')
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="Prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</div>

@endsection