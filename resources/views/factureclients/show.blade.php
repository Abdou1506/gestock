
@extends('pluto')
@section('titre')
Nom de la commande
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
                                <i class="fa fa-globe"></i> AdminLTE, Inc.
                                <small class="float-right">Date: 2/10/2018</small>
                              </h4>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- info row -->
                          <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                              From
                              <address>
                                <strong>Admin, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br>
                                Email: info@almasaeedstudio.com
                              </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                              To
                              <address>
                                <strong>John Doe</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (555) 539-1037<br>
                                Email: john.doe@example.com
                              </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                              <b>Invoice #007612</b><br>
                              <br>
                              <b>Order ID:</b> 4F3S8J<br>
                              <b>Payment Due:</b> 2/22/2014<br>
                              <b>Account:</b> 968-34567
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