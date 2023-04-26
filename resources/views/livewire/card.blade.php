<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="dropdown-cart-header">
        <span>2 Produits</span>
        <a href="#">Voir chariot</a>
    </div>
    <ul class="shopping-list">
        @foreach ($card_contents as $item)
        <li>
            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
            <a class="cart-img" href="#"><img src="images/gas-station (1).png" alt="#"></a>
            <h4><a href="#">{{$item->name}}</a></h4>
            <p class="quantity">Fournisseur, Total - <span class="amount">$15099.00</span></p>
        </li>
        @endforeach
    </ul>
    <div class="bottom">
        <div class="total">
            <span>Total</span>
            <span class="total-amount">$50099.00</span>
        </div>
        <a href="checkout.html" class="btn animate">Checkout</a>
    </div>
</div>
