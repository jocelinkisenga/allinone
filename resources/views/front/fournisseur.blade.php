@extends('layouts.front')
@section('content')


    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <hr>


    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span>Fournisseur </span>{{$company->name}}</h1>
                                        <br> <br>



                                        <p>{{$company->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->
    <section class="small-banner section">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Banner  -->
                @foreach ($company->products as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{asset('storage/uploads/'.$item->photo)}}" alt="#">
                        <div class="content">
                            <h3>{{$item->name}}  </h3>
                            <a href="cart.html">{{$item->name}} </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Small Banner -->

    <hr>

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Livraison gratuite</h4>
                        <p>Commandes supérieures à 1000</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Retour gratuit</h4>
                        <p>Retour sous 30 jours</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Paiement sécurisé</h4>
                        <p>Paiement 100% sécurisé</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Meilleure produit</h4>
                        <p>Prix garanti</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-3 col-12">
                            <h4
                                style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">
                                Hazetu Petroleum</h4>
                            <h3 style="font-size:30px;color:#333;">creation d'une plateforme de vente petrolier en
                                Lubumbashi<h3>
                                    <p
                                        style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">
                                        Habari Zetu Services est une entreprise lancée en Décembre 2018 au registre de
                                        commerce CD/LSH/RCCM/18-A-00748 et elle est basée à Lubumbashi en République
                                        Démocratique du Congo.</p>
                                    <div class="button" style="margin-top:30px;">
                                        <a href="" target="_blank" class="btn" style="color:#fff;">Buy
                                            Now!</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
