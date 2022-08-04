@extends('pluto')
@section('titre')
    modification de la commande
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('commandes.update',$commandes->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="datecommande" class="label-control">Date Commande</label>
                <input type="date" class="form-control" name="date" value="{{old('date',$commandes->date)}}">

            </div>
            
            <div class="mb-3">
                <label for="adresse" class="label-control">adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{old('adresse',$commandes->adresse)}}">

            </div>
            <div class="mb-3">
                <label for="etat" class="label-control">Etat</label>
                <input type="text" class="form-control" name="etat" value="{{old('etat',$commandes->etat)}}">

            </div>
            <div class="mb-3">
            <label for="qtecommande" class="label-control">qtecommandé</label>
            <input type="text" class="form-control" name="qtecommande" value="{{old('qtecommande',$commandes->qtecommande)}}">

        </div>
        <div class="mb-3">
            <label for="prix" class="label-control">Prix</label>
            <input type="text" class="form-control" name="prix" value="{{old('prix',$commandes->prix)}}">

        </div>
            <div class="mb-3">
                <label for="nom" class="label-control">Nom client</label>
                <select name="client_id" class="form-select" id="" value="{{old('client_id',$commandes->client_id)}}">
                    @foreach ($clients as $c)
                        <option value="{{ $c->id }}">{{ $c->nom }}</option>
                    @endforeach
    
                </select>
            </div>
            <div class="mb-3">
                <label for="nom" class="label-control">Nom produit</label>
                <select name="produit_id" class="form-select" id="" value="{{old('produit_id',$commandes->produit_id)}}">
                    @foreach ($produits as $p)
                        <option value="{{ $p->id }}">{{ $p->libelle }}</option>
                    @endforeach
    
                </select>
            </div>
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Modifier</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
