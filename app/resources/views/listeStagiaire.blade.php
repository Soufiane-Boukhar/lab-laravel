@extends('layout.layout')
@extends('layout.nav')
@section('content')

<div class="container">
    <table class="table" style="margin-top:30px;">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stagiaires as $stagiaire)
            <tr>
                <td>{{$stagiaire->nom}}</td>
                <td>{{$stagiaire->prenom}}</td>
                <td>{{$stagiaire->email}}</td>
                <td>
                    <a href="{{ route('edit.stagiaire', ['id' => $stagiaire->id]) }}" class="btn btn-success">Editer</a>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$stagiaires->links()}}
</div>

@endsection





