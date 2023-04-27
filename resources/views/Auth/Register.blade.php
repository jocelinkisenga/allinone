@extends('layouts.main')
@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>HAZELLI</b>PETRO</a>
      </div>
      <div class="card-body">


        <form action="{{route('register')}}" method="post">
            @csrf
            {{-- <div class="input-group mb-3">
                <select name="role_name" id=""@class(['form-control', 'font-bold' => true])>
                    <option selected>Créer en tant que</option>
                    <option value="C">client</option>
                    <option value="M">Manager</option>
                </select>
              </div> --}}
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="nom complet">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="comfirm" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 Accepter <a href="#">les conditions d'utilisation </a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary ">s'enregistrer</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
{{--
        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div>
   --}}
        <a href="login.html" class="text-center">se connecter</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
