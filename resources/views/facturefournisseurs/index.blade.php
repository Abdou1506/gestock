@extends('pluto')
@section('titre')
    liste des factures
@endsection
@section('contenu')
<div class="table_section padding_infor_info">
<a href="{{route('facturefournisseurs.create')}}" class="btn btn-primary"> Ajouter facturefournisseur</a>

  <div class="table-responsive-sm bg-light">
<table class="table table-striped" id="facturefournisseurs">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date </th>
        <th scope="col">Qte </th>
        <th scope="col">prix </th>
        <th scope="col">Total ligne </th>
        <th scope="col">Nom fournisseur</th>
        <th scope="col">Action</th>
        
        
      </tr>
    </thead>
    <tbody>
    @php 

$t=0;
            @endphp
        @foreach ($facturefournisseurs as $f)
        @php 
            $totalligne=$f->qte*$f->prix;
            $t+=$totalligne;
            @endphp
      <tr>
        <th scope="row">{{$f->id}}</th>
        <td>{{$f->date}}</td>
        <td>{{$f->qte}}</td>
        <td>{{$f->prix}}</td>
        <td>{{$totalligne}}</td>
        <td>{{$f->fournisseur->nom}}</td>
        
        <td class="btn-group">
          <form method="post" action="{{route('facturefournisseurs.destroy',$f->id)}}" onclick="return confirm('supprimer?')">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
          
        </form>
        <a class="btn btn-warning" href="{{route('facturefournisseurs.edit',$f)}}"><i class="fa-solid fa-pen-to-square"></i></a>
        <a class="btn btn-primary" href="{{ route('facturefournisseur.produits.print', $f->id) }}" ><i class="fa-solid fa-print"></i></a>

        </td>
       
       
        
      </tr>
      @endforeach
     

      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <th>{{$t}}</th>
          <td></td>
          <td></td>
         
        </tr>
      </tfoot>
      
    </tbody>
  </table>
</div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<scrip src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
	$('#facturefournisseurs').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			 'print'
		],
    printme(){
      window.print();
    }
	} );
} );
</script>


@endpush