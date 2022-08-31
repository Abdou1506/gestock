@extends('pluto')
@section('titre')
    liste des fournisseurs
@endsection
@section('contenu')
<div class="table_section padding_infor_info">
<a href="{{route('fournisseurs.create')}}" class="btn btn-primary"> Ajouter fournisseur</a>

  <div class="table-responsive-sm">
<table class="table table-striped" id="fournisseurs">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom </th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel </th>
        <th scope="col">Pays </th>
        <th scope="col">Email </th>
        <th scope="col">Action</th>
        
        
      </tr>
    </thead>
    <tbody>
        @foreach ($fournisseurs as $c)
            
      <tr>
        <th scope="row">{{$c->id}}</th>
        <td>{{$c->nom}}</td>
        <td>{{$c->adresse}}</td>
        <td>{{$c->tel}}</td>
        <td>{{$c->pays}}</td>
        <td>{{$c->email}}</td>
        <td class="btn-group">
          <form method="post" action="{{route('fournisseurs.destroy',$c->id)}}" onclick="return confirm('supprimer?')">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
          
        </form>
        <a class="btn btn-warning" href="{{route('fournisseurs.edit',$c)}}"><i class="fa-solid fa-pen-to-square"></i></a>
        
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
    $('#fournisseurs').DataTable();
} );
</script>


@endpush