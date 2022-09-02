@extends('pluto')
@section('titre')
Nom de la commande
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 m-3 mx-auto shadow p-2">
        <form action="{{ route('commandes.produits.store', $commandes->id) }}" method="POST">
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


<div class="table_section padding_infor_info">
    <div class="table-responsive-sm">
        <h4>Commande Num : {{ $commandes->id }}</h4>
        <table class="table table-bordered" id="commandes">
            <thead>
                <tr>
                    <th scope="col">#</th>

                    <th scope="col">QteCommandé</th>

                    <th scope="col">Nom Produit</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($commandes->produit as $c)
                  <tr>
                    <th scope="row">{{ $c->id }}{{ $commandes->id }}</th>
                    <td>{{ $c->pivot->qtecommande }}</td>
                    <td>
                        {{$c->libelle}}
                        
                    </td>
                    <td class="btn-group">
                         <form method="post" action="{{ route('commandes.produits.destroy', $c->id) }}"
                            onclick="return confirm('supprimer?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>

                        </form>
                        <a class="btn btn-warning" href="{{ route('commandes.produits.edit', $c) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                       

                    </td>



                  </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@endsection