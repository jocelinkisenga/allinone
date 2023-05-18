@extends('Manager.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h3 class="mt-4">Modifier le produit {{$product->name}}</h3>

                <div class="row justify-center" style="margin-top: 7%;">
                    <div class="card-body col-8">
                        <form action="{{ route('manager.product.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom du produit</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">prix</label>
                                <input type="text" name="price" class="form-control" id="exampleInputPassword1"
                                    value="{{$product->price}}">
                            </div>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            {{-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary text-white">modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
