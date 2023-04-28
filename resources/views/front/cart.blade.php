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
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>PRODUIT</th>
                                <th>FOURNISSEUR</th>
                                <th class="text-center">PRIX UNITAIRE</th>
                                <th class="text-center">QUANTITÉ</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">Petrole</a></p>

                                </td>
                                <td class="product-des" data-title="Description">

                                    <p class="product-des"> Shell</p>
                                </td>
                                <td class="price" data-title="Price"><span>$100.00 </span></td>
                                <td class="qty" data-title="Qty">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                disabled="disabled" data-type="minus" data-field="quant[10]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[10]" class="input-number" data-min="100"
                                            data-max="100000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                data-type="plus" data-field="quant[10]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>$220.88</span></td>
                                <td class="action" data-title="Remove"><a href="#"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">Mazout</a></p>
                                </td>
                                <td class="product-des" data-title="Description">

                                    <p class="product-des"> Total</p>
                                </td>
                                <td class="price" data-title="Price"><span>$10000.00 </span></td>
                                <td class="qty" data-title="Qty">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                disabled="disabled" data-type="minus" data-field="quant[2]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[2]" class="input-number" data-min="100"
                                            data-max="100000" value="2">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                data-type="plus" data-field="quant[2]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>$2200.88</span></td>
                                <td class="action" data-title="Remove"><a href="#"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            <tr>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">Essence</a></p>
                                </td>
                                <td class="product-des" data-title="Description">

                                    <p class="product-des"> Chevron</p>
                                </td>
                                <td class="price" data-title="Price"><span>$1100.00 </span></td>
                                <td class="qty" data-title="Qty">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                disabled="disabled" data-type="minus" data-field="quant[3]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[3]" class="input-number" data-min="100"
                                            data-max="100000" value="3">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number"
                                                data-type="plus" data-field="quant[3]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>$2200.88</span></td>
                                <td class="action" data-title="Remove"><a href="#"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">

                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news"
                                                id="2" type="checkbox"> Livraison (+100$)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Sous-total du panier<span>$330.00</span></li>
                                        <li>Livraison par produit<span> 100</span></li>
                                        <li>TVA<span>$203.10</span></li>
                                        <li class="last">Vous payez<span>$310.00</span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="checkout.html" class="btn">Passer à la caisse</a>
                                        <a href="ListeFournisseur.html" class="btn">Poursuivre les achats</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Shopping Cart -->

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
    <!-- Modal end -->

@endsection
