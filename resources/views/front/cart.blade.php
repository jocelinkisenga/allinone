@extends('layouts.front')
@section('title','carte des produits')
@section('content')


    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Chariot</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shopping Cart -->


  @livewire('card-form')
    <!--/ End Shopping Cart -->

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
    <!-- Modal end -->

@endsection
