@extends('pluto')
@section('titre')
    modification du categorie
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('categories.update',$categories->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomcategorie" class="label-control">nom categorie</label>
                <input type="text" class="form-control" name="nomcategorie" value="{{old('nomcategorie',$categories->nomcategorie)}}">

            </div>
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Modifier</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
