@extends('pluto')
@section('titre')
    Nom de la commande
@endsection
@section('contenu')
    <div class="row">
        <div class="col-md-6 m-3 mx-auto shadow p-2">
            <form action="{{ route('commandes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="datecommande" class="label-control">Date Commande</label>
                    <input type="date" class="form-control" name="date">

                </div> 
           
            <div class="mb-3">
                <label for="adresse" class="label-control">Adresse</label>
                <input type="text" class="form-control" name="adresse">

            </div>
        <div class="mb-3">
            <label for="etat" class="label-control">Etat</label>
            <input type="text" class="form-control" name="etat">

        </div>
        <div class="mb-3">
            <label for="qtecommande" class="label-control">qtecommandé</label>
            <input type="number" class="form-control" name="qtecommande">

        </div>
        
    
                <div class="mb-3">
                    <label for="nom" class="label-control">Nom client</label>
                    <select name="client_id" class="form-select" id="">
                            <option value="" selected>.......</option>

                        @foreach ($clients as $c)
                            <option value="{{ $c->id }}">{{ $c->nom }}</option>
                        @endforeach
        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nom" class="label-control">Nom produit</label>
                    <select name="produit_id[]" multiple  class="form-select" id="">
                     <option value="" selected>.......</option>
                        @foreach ($produits as $p)
                            <option value="{{ $p->id }}">{{ $p->libelle }}</option>
                        @endforeach
        
                    </select>
                </div>
                <div class="mb-3 rounded">
                    <button class="btn btn-primary col-12">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
