@extends('pluto')
@section('titre')
FACTURE  N #AAbc{{rand(10000,100000)}}
@endsection
@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-12">

      <!-- Main content -->
      <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h4>
              <i class="fa fa-globe"></i> LevelStock
              <small class="float-right">Date: {{$facturefournisseurs->date}}</small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row">
          <div class="col-sm-4 invoice-col">
            FROM
            <address>
              <strong>{{$facturefournisseurs->fournisseur->nom}} </strong><br>
              {{$facturefournisseurs->fournisseur->adresse}}<br>
              Phone:{{$facturefournisseurs->fournisseur->tel}}<br>
              Email:{{$facturefournisseurs->fournisseur->email}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            TO
            <address>
              <strong>LevelStock, Inc</strong><br>
              Boulevard Anfa<br>
              CASABLANCA, CA 94107<br>
              Phone: +212 601 39 31 88<br>
              Email: LevelStock.@gmail.com
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>FACTURE #AAbc{{rand(10000,100000)}}</b><br>
            <br>

          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Date</th>
                <th>QTE</th>
                <th>Prix</th>
                <th>Total Ligne</th>
                <th>nom fournisseur</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $facturefournisseurs->id}}</td>
                <td>{{$facturefournisseurs->date}}</td>
                <td>{{$facturefournisseurs->qte}}</td>
                <td>{{$facturefournisseurs->prix}}</td>
                <td>{{$facturefournisseurs->qte*$facturefournisseurs->prix}}</td>
                <td>{{$facturefournisseurs->fournisseur->nom}}</td>
              </tr>



            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-12 ">

          <a href="#" @click.prevent="printme" onclick="print()" class="btn btn-success"><i class="fa fa-print"></i> Print</a>

        </div>
      </div>

    </div>
    <!-- /.invoice -->
  </div>


</div>
</div>


@endsection