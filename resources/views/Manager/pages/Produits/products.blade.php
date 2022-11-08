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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                    Ajouter un produit
                                </button>

                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Large Modal</h4>
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
                                                        <form>
                                                            <div class="card-body">
                                                              <form action="">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom du produit</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">prix</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputPassword1" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">File input</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input"
                                                                                id="exampleInputFile">
                                                                            <label class="custom-file-label"
                                                                                for="exampleInputFile">Choose file</label>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">Upload</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">selectionner une catégorie</label>
                                                               
                                                                    <select class="custom-select" name="" id="">
                                                                      <option selected>Selectionner une cat...</option>
                                                                      <option value=""></option>
                                                                    </select>
                                                                  
                                                              </div>
                                                            </div>
                                                            <!-- /.card-body -->


                                                        </form>
                                                    </div>
                                                    <!-- /.card -->

                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">fermer</button>
                                                <button type="button" class="btn btn-primary">enregistrer</button>
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
                                            <th>prix</th>
                                            <th>categorie</th>
                                            <th>Détail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>detail</td>
                                        </tr>
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
