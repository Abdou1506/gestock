@extends('pluto')
@section('titre')
    Nom du client
@endsection
@section('contenu')
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $e)
        <li>{{$e}}</li>
            
        @endforeach
    </ul>
@endif
<div class="row">
    <div class="col-md-6 m-3 mx-auto shadow p-2">
        <form action="{{route('clients.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="label-control">Nom</label>
                <input type="text" value="{{old('nom')}}" class="form-control" name="nom">
                @error('nom')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror

            </div>
            <div class="mb-3">
                <label for="adresse" class="label-control">Adresse</label>
                <input type="text" value="{{old('adresse')}}" class="form-control" name="adresse">

            </div>
            <div class="mb-3">
                <label for="tel" class="label-control">Telephone</label>
                <input type="text" value="{{old('tel')}}" class="form-control" name="tel">

            </div>
            <div class="mb-3">
                <label for="email" class="label-control">Email</label>
                <input type="email" value="{{old('email')}}" class="form-control" name="email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>
            <div class="mb-3">
                <label for="pays" class="label-control">Pays</label>
                <input type="text" value="{{old('pays')}}" class="form-control" name="pays">

            </div>
            
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Ajouter</button>
            </div>
        </form>
    </div>
</div>
    
@endsection