@extends('Admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row" style="margin-top: 7%;">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                            </div>
                            <div class="card-body">


                                <br />
                                <br />
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>



                <div class="row bb">
                    <div class="col-6 card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Element</th>
                                        <th>valeur</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-bold">Noms</td>
                                        <td>{{$order->name}} {{$order->surname}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">téléphone</td>
                                        <td>{{$order->number_phone}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">email</td>
                                        <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">pays</td>
                                        <td>{{$order->country}}</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-6 card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Element</th>
                                        <th>valeur</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-bold">adresse P</td>
                                        <td>{{$order->address_physique}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">adresse L</td>
                                        <td>{{$order->address_livraison}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">société</td>
                                        <td>{{$order->company->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">ville</td>
                                        <td>{{$order->town}}</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /.col -->
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Détails de la commande</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0 mt-6">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>produits</th>
                                            <th>prix unitaire</th>
                                            <th>quantité</th>
                                            <th>sous total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->product->name}}</td>
                                            <td>{{$item->product->price}} $</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->quantity * $item->product->price}} $</td>
                                        </tr>


                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

            </div>
    </div>
@endsection
