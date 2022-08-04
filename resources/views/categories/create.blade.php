@extends('pluto')
@section('titre')
    Nom du Categorie
@endsection
@section('contenu')
    <div class="row">
        <div class="col-md-6 m-3 mx-auto shadow p-2">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nomcategorie" class="label-control">Nom Categorie</label>
                    <input type="text" class="form-control" name="nomcategorie">

                </div>
                <div class="mb-3 rounded">
                    <button class="btn btn-primary col-12">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
