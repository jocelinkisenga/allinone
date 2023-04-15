@extends('Manager.layouts.app')

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
                                @if (Auth::user()->status == 0)
                                    <h2>Votre compte n'est pas encore activé</h2>
                               @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                    Ajouter une entreprise
                                </button>
                                @endif
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">créer une entreprise</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <!-- general form elements -->
                                                    <div class="card card-primary">

                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                     
                                                            <div class="card-body">
                                                              <form action="{{route('manager.company.store')}}" method="POST" enctype="multipart/form-data">
                                                             @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom de l'entreprise</label>
                                                                    <input type="text" name="name" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">Image</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="image" class="custom-file-input"
                                                                                id="exampleInputFile">
                                                                            <label class="custom-file-label"
                                                                                for="exampleInputFile">choisissez une image</label>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">image</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">petite présentation</label>
                                                                    <textarea name="description" id="" class="form-control"></textarea>
                                                                  
                                                              </div>
                                                              
                                                              <div class="form-group">
                                                                <label for="exampleInputPassword1">adresse</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputPassword1" placeholder="" name="adress">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">contact</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputPassword1" placeholder="" name="contact">
                                                            </div>
                                                            </div>
                                                            <!-- /.card-body -->


                                                      
                                                    </div>
                                                    <!-- /.card -->

                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">fermer</button>
                                                <button type="submit" class="btn btn-primary">enregistrer</button>
                                            </div>
                                          </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
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
                                <h3 class="card-title">Listes des categories</h3>

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
                                            <th>contact</th>
                                            <th>adresse</th>
                                            <th>Détail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data))
                                        <tr>
                                            <td>183</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->contact}}</td>
                                            <td><span class="tag tag-success">{{$data->adress}}</span></td>
                                            <td>detail</td>
                                        </tr>
                                        @endif

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
