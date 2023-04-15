@extends('Manager.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @auth

                    <div class="row" style="margin-top: 7%;">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    @if (Auth::user()->status == false)
                                        <h2>Vous n'êtes pas activé</h2>
                                    @else
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal-lg">
                                            Ajouter une catégorie
                                        </button>
                                    @endif
                                    <div class="modal fade" id="modal-lg">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ajouter une catégorie</h4>
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
                                                            <form action="{{ route('manager.categorie.store') }}"
                                                                method="POST">
                                                                @csrf

                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">nom de la
                                                                            catégorie</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="exampleInputEmail1"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                                <!-- /.card-body -->



                                                        </div>
                                                        <!-- /.card -->

                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">fermer</button>
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                                                <th>Détail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($data))
                                            @foreach ($data as $key => $categorie)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $categorie->name }}</td>
                                                <td>detail</td>
                                            </tr>
                                        @endforeach

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

                    
                @endauth
            </div>
    </div>
@endsection
