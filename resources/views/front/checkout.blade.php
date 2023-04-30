@extends('layouts.front')
@section('title','checkout')

@section('content')

    <!--/ End Header -->
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Paiement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Effectuez votre paiement ici</h2>
                        <p>Veuillez vous enregistrer afin d'effectuer votre paiement plus rapidement</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('checkout.store')}}">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Prénom<span>*</span></label>
                                        <input type="text" name="name" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Nom de famille<span>*</span></label>
                                        <input type="text" name="surname" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Adresse e-mail<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Numéro de téléphone<span>*</span></label>
                                        <input type="tel" name="number_phone" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>pays<span>*</span></label>
                                        <input type="text" name="country" value="RDC">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>ville<span>*</span></label>
                                        <select name="town" id="state-province">
                                            <option value="lubumbashi" selected="selected">Lubumbashi</option>
                                            <option value="likasi">Likasi</option>
                                            <option value="kolwezi">Kolwezi</option>
                                            <option value="kipushi">Kipushi</option>
                                            <option value="kalemi">Kalemi</option>
                                            <option value="lomami">Lomami</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Adresse Physique<span>*</span></label>
                                        <input type="text" name="address_physique" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Adresse de Livraison<span>*</span></label>
                                        <input type="text" name="address_livraison" placeholder="" required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Fournisseur<span>*</span></label>
                                        <select name="company_id" id="company">
                                            <option value="" selected="selected">selectionner un fournisseur</option>
                                          @foreach ($compagnies as $company)
                                          <option value="{{$company->id}}">{{$company->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group create-account">
                                        <div class="button">
                                            <button type="submit" class="btn btn-success">comfirmer la commande</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>TOTAL DU CART</h2>
                            <div class="content">
                                <ul>
                                    <li>Total partiel<span>${{$total}}</span></li>
                                    <li>(+) Expédition<span>${{$count * 100}}</span></li>
                                    <li class="last">Total<span>{{$total + ($count * 100)}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>Paiements</h2>
                            <div class="content">
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="1"><input name="updates"
                                            id="1" type="checkbox"> Paiements par chèque</label>
                                    <label class="checkbox-inline" for="2"><input name="news"
                                            id="2" type="checkbox"> Contre remboursement</label>
                                    <label class="checkbox-inline" for="3"><input name="news"
                                            id="3" type="checkbox"> Carte de credi</label>
                                </div>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- Payment Method Widget -->
                        <div class="single-widget payement">
                            <div class="content">
                                <img src="{{asset('front/images/payment-method.png')}}" alt="#">
                            </div>
                        </div>
                        <!--/ End Payment Method Widget -->
                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">





                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--/ End Checkout -->

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




@endsection
