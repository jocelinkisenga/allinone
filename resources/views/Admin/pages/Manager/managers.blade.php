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

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listes des managers</h3>

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
                                            <th>statut</th>
                                            <th>Détail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($managers as $key =>$manager )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$manager->name}}</td>
                                           @if ($manager->status == false)
                                           <td>non activé</td>
                                           @else
                                           <td> activé</td>
                                           @endif
                                            <td>
                                                <a href="http://" title="voir plus"><i class="fas fa-eye text-primary ml-1"></i> </a>
                                                <a href="{{route('manager.activer',['id'=>$manager->id])}}" title="activer"> <i class="fas fa-mars-stroke-v text-success ml-1"></i></a>
                                               <a href="{{route('manager.desactiver',['id'=>$manager->id])}}" title="désactiver"> <i class="fas fa-window-close text-danger mr-1"></i></a>
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
