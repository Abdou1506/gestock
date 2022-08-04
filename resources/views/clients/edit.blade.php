@extends('pluto')
@section('titre')
    modification du client
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('clients.update',$clients->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="label-control">Nom </label>
                <input type="text" class="form-control" name="nom" value="{{old('nom',$clients->nom)}}">

            </div>
            <div class="mb-3">
                <label for="adresse" class="label-control">Adresse </label>
                <input type="text" class="form-control" name="adresse" value="{{old('adresse',$clients->adresse)}}">

            </div>
            <div class="mb-3">
                <label for="tel" class="label-control">Tel </label>
                <input type="text" class="form-control" name="tel" value="{{old('tel',$clients->tel)}}">

            </div>
            <div class="mb-3">
                <label for="email" class="label-control">Email </label>
                <input type="text" class="form-control" name="email" value="{{old('email',$clients->email)}}">

            </div>
            <div class="mb-3">
                <label for="pays" class="label-control">Pays </label>
                <input type="text" class="form-control" name="pays" value="{{old('pays',$clients->pays)}}">
                

            </div>
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Modifier</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
