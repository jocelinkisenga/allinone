<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="dropdown-cart-header">
        <span>2 Produits</span>
        <a href="#">Voir chariot</a>
    </div>
    <ul class="shopping-list">
        @foreach ($card_contents as $item)
        <li>

            <a class="cart-img" href="#"><img src="{{asset('storage/uploads/'.$item->image)}}" alt="#"></a>
            <h4><a href="#">{{$item->name}}</a></h4>
            <p class="quantity"> <span class="amount"></span></p>
        </li>
        @endforeach
    </ul>
    <div class="bottom">
        <div class="total">
            <span></span>
            <span class="total-amount"></span>
        </div>
        <a href="{{route('card')}}" class="btn animate">voir le panier</a>
    </div>
</div>
