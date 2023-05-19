@extends('Manager.layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            <div class="row" style="margin-top: 7%;">
                <div class="card-body">
                    <form action="{{route('profile.modify.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nom </label>
                          <input type="text" name="name" class="form-control"
                              id="exampleInputEmail1" placeholder="" value="{{Auth::user()->name}}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">email</label>
                          <input type="text" name="email" class="form-control"
                              id="" value="{{Auth::user()->email}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">mot de passe</label>
                        <input type="password" name="password" class="form-control"
                            id="" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">confirmer mot de passe</label>
                        <input type="text" name="password_confirm" class="form-control"
                            id="" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary p-2 text-white">modifier</button>
                    </div>

                    </form>
                  </div>
            </div>
        </div>
    </section>
</div>
@endsection
