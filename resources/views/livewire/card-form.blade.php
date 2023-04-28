<div>
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
                            @foreach ($contents as $item)
                            <tr>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$item['name']}}</a></p>

                                </td>
                                <td class="product-des" data-title="Description">

                                    <p class="product-des"> Shell</p>
                                </td>
                                <td class="price" data-title="Price"><span>$100.00 </span></td>
                                <td class="qty" data-title="Qty">
                                    <form wire:prevent action="">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" wire:click="annuler()" class="btn btn-primary btn-number"
                                                >
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" wire:model="quantity" class="input-number" data-min="1"
                                            data-max="100000" value="{{$quantity}}">
                                        <div class="button plus">
                                            <button type="button" wire:click="ajout()" class="btn btn-primary btn-number">
                                                <i class="ti-plus"></i>
                                            </button>

                                        </div>
                                    </div>
                                </form>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>$220.88</span></td>
                                <td class="action" data-title="Remove"><a href="#"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            @endforeach
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
                                        <a href="{{route('checkout')}}" class="btn">Passer à la caisse</a>
                                        <a href="{{route('fournisseurs')}}" class="btn">Poursuivre les achats</a>
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
</div>
