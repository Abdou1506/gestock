@extends('pluto')
@section('titre')
    modification du client
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('factureclients.update',$factureclients->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="date" class="label-control">date </label>
                <input type="date" class="form-control" name="date" value="{{old('date',$factureclients->date)}}">

            </div>
            <div class="mb-3">
                <label for="qte" class="label-control">qte </label>
                <input type="text" class="form-control" name="qte" value="{{old('qte',$factureclients->qte)}}">

            </div>
            <div class="mb-3">
                <label for="prix" class="label-control">prix </label>
                <input type="text" class="form-control" name="prix" value="{{old('prix',$factureclients->prix)}}">

            </div>
            <div class="mb-3">
                <label for="nom" class="label-control">Nom client</label>
                <select name="client_id" class="form-select" id="" value="{{old('client_id',$factureclients->client_id)}}">
                    @foreach ($clients as $c)
                        <option value="{{ $c->id }}">{{ $c->nom }}</option>
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
