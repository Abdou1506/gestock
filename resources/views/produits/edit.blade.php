@extends('pluto')
@section('titre')
    modification du produit
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('produits.update',$produits->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="photo" class="label-control">photo</label>
                <input type="file" class="form-control" name="photo" value="{{old('photo',$produits->photo)}}">

            </div>
            <div class="mb-3">
                <label for="libelle" class="label-control">libelle</label>
                <input type="text" class="form-control" name="libelle" value="{{old('libelle',$produits->libelle)}}">

            </div>
            <div class="mb-3">
                <label for="qte" class="label-control">Qte</label>
                <input type="text" class="form-control" name="qte" value="{{old('qte',$produits->qte)}}">

            </div>
            <div class="mb-3">
                <label for="prix_unitaire" class="label-control">Prix</label>
                <input type="text" class="form-control" name="prix_unitaire" value="{{old('prix_unitaire',$produits->prix_unitaire)}}">

            </div>
            <div class="mb-3">
                <label for="categorie_id" class="label-control">categorie_id</label>
                <input type="text" class="form-control" name="categorie_id" value="{{old('categorie_id',$produits->categorie_id)}}">

            </div>
            <div class="mb-3">
                <label for="fournisseur_id" class="label-control">fournisseur_id</label>
                <input type="text" class="form-control" name="fournisseur_id" value="{{old('fournisseur_id',$produits->fournisseur_id)}}">
            </div>

            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Modifier</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
