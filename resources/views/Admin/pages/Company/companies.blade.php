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

                            <!-- /.card -->
                        </div>
                    </div>
                </div>



                <div class="row bb">

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listes des sociétés</h3>

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
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom</th>
                                            <th>Détail</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companies as $key =>$company )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$company->name}}</td>
                                            @if ($company->status == false)
                                            <td>non activé</td>
                                            @else
                                            <td> activé</td>
                                            @endif
                                             <td>
                                                 <a href="http://" title="voir plus"><i class="fas fa-eye text-primary ml-1"></i> </a>
                                                 <a href="{{route('company.activer',['id'=>$company->id])}}" title="activer"> <i class="fas fa-mars-stroke-v text-success ml-1"></i></a>
                                                <a href="{{route('company.desactiver',['id'=>$company->id])}}" title="désactiver"> <i class="fas fa-window-close text-danger mr-1"></i></a>
                                                </td>
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
