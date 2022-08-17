@extends('pluto')
@section('titre')
    Nom de la commande
@endsection
@section('contenu')
    <div class="row">
        <div class="col-md-6 m-3 mx-auto shadow p-2">
            <form action="{{ route('commandes.commande_produit_edit', $commandes->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="commande_id" class="label-control">Commande</label>
                    <input type="hidden" class="form-control" name="commande_id">

                </div>

                <div class="mb-3">
                    <label for="qtecommande" class="label-control">QteCommandé</label>
                    <input type="text" class="form-control" name="qtecommande">

                </div>
                <div class="mb-3">
                    <label for="nom" class="label-control">Nom produit</label>
                    <select name="produit_id" class="form-select" id="">
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
