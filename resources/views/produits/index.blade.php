@extends('pluto')
@section('titre')
    liste des Produits
@endsection
@section('contenu')
<div class="table_section padding_infor_info">
  <div class="table-responsive-sm">
<table class="table table-bordered" id="produits">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo </th>
        <th scope="col">Libelle </th>
        <th scope="col">Qte</th>
        <th scope="col">Prix_unitaire </th>
        <th scope="col">Categorie </th>
        <th scope="col">Fournisseur</th>
        <th scope="col">Action</th>
        
        
      </tr>
    </thead>
    <tbody>
        @foreach ($produits as $p)
            
      <tr>
        <th scope="row">{{$p->id}}</th>
        <td>
          <img src="{{asset('images/'. $p->photo)}}" width="100px"  height="100px">
        </td>
        <td>{{$p->libelle}}</td>
        <td>{{$p->qte}}</td>
        <td>{{$p->prix_unitaire}}</td>
        <td>{{$p->categorie->nomcategorie}}</td>
        <td>{{$p->fournisseur->nom}}</td>
        <td class="btn-group">
          <form method="post" action="{{route('produits.destroy',$p->id)}}" onclick="return confirm('supprimer?')">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
          
        </form>
        <a class="btn btn-warning" href="{{route('produits.edit',$p)}}"><i class="fa-solid fa-pen-to-square"></i></a>

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
    $('#produits').DataTable();
} );
</script>


@endpush