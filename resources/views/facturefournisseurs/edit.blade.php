@extends('pluto')
@section('titre')
    modification du client
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('facturefournisseurs.update',$facturefournisseurs->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="date" class="label-control">date </label>
                <input type="date" class="form-control" name="date" value="{{old('date',$facturefournisseurs->date)}}">

            </div>
            <div class="mb-3">
                <label for="qte" class="label-control">qte </label>
                <input type="text" class="form-control" name="qte" value="{{old('qte',$facturefournisseurs->qte)}}">

            </div>
            <div class="mb-3">
                <label for="prix" class="label-control">prix </label>
                <input type="text" class="form-control" name="prix" value="{{old('prix',$facturefournisseurs->prix)}}">

            </div>
            <div class="mb-3">
                <label for="nom" class="label-control">Nom client</label>
                <select name="fournisseur_id" class="form-select" id="" value="{{old('fournisseur_id',$facturefournisseurs->fournisseur_id)}}">
                    @foreach ($fournisseurs as $f)
                        <option value="{{ $f->id }}">{{ $f->nom }}</option>
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
