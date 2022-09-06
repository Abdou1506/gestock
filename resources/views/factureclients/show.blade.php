
@extends('pluto')
@section('titre')
FACTURE N #1AAb{{rand(10000,100000)}}
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
                                <i class="fa fa-globe"></i> LevelStock, Inc.
                                <small class="float-right">Date: {{$factureclients->date}}</small>
                              </h4>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- info row -->
                          <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                              From
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
                              To
                              <address>
                                <strong>{{$factureclients->client->nom}} </strong><br>
                                {{$factureclients->client->adresse}}<br>
                                Phone:{{$factureclients->client->tel}}<br>
                                Email:{{$factureclients->client->email}}
                              </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                              <b>FACTURE #1AAb{{rand(10000,100000)}}</b><br>
                              <br>
                              
                            </div>
                            <!-- /.col -->
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
                                  <th>nom client</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>{{ $factureclients->id}}</td>
                                  <td>{{$factureclients->date}}</td>
                                  <td>{{$factureclients->qte}}</td>
                                  <td>{{$factureclients->prix}}</td>
                                  <td>{{$factureclients->qte*$factureclients->prix}}</td>
                                  <td>{{$factureclients->client->nom}}</td>
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

                              <a href="#" @click.prevent="printme" onclick="print()"  class="btn btn-success"><i class="fa fa-print"></i> Print</a>

                            </div>
                          </div>

                        </div>
                        <!-- /.invoice -->
                      </div>


        </div>
    </div>


@endsection