@extends('pluto')
@section('titre')
    liste des commandes
@endsection
@section('contenu')
    <div class="table_section padding_infor_info">
        <div class="table-responsive-sm">
            <table class="table table-striped" id="commandes">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date Commande</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Etat</th>
                        {{-- <th scope="col">QteCommandé</th> --}}
                        {{-- <th scope="col">Prix</th> --}}
                        <th scope="col">Nom Client</th>
                        <th scope="col">Nom Produit</th>
                        <th scope="col">Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $c)
                        <tr>
                            <th scope="row">{{ $c->id }}</th>
                            <td>{{ $c->date }}</td>
                            <td>{{ $c->adresse }}</td>
                            <td>{{ $c->etat }}</td>
                            {{-- <td>{{ $c->qtecommande }}</td> --}}
                            {{-- <td>{{ $c->prix }}</td> --}}
                            <td>{{$c->client->nom}}</td>
                            <td>
                                @foreach ($c->produit as $p)
                                {{$p->libelle}}
                                @endforeach
                            </td>
                            <td class="btn-group">
                                <form method="post" action="{{ route('commandes.destroy', $c->id) }}"
                                    onclick="return confirm('supprimer?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>

                                </form>
                                <a class="btn btn-warning" href="{{ route('commandes.edit', $c) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-success" href="{{ route('commandes.produits.edit', $c->id) }}"><i
                                        class="fa-solid fa-pen-to-square">E</i></a>

                            </td>

                           

                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#commandes').DataTable();
} );
</script>


@endpush