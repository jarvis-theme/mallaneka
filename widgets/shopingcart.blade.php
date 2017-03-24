<li class="dropdown">
    <a class="fa fa-shopping-cart" href="shopping-cart.html"></a>
    <ul class="dropdown-menu dropdown-menu-shipping-cart">
    	@foreach (Shpcart::cart()->contents() as $key => $cart)
    		<li>
	            <a class="dropdown-menu-shipping-cart-img" href="#">
	                <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
	            </a>
	            <div class="dropdown-menu-shipping-cart-inner">
	                <p class="dropdown-menu-shipping-cart-price">{{ $cart['qty']}} {{ price($cart['price'])}}</p>
	                <p class="dropdown-menu-shipping-cart-item"><a href="#">{{$cart['name']}}</a>
	                </p>
	            </div>
	        </li>
		@endforeach
        <li>
            <p class="dropdown-menu-shipping-cart-total">Total: {{ price(Shpcart::cart()->total() )}}</p>
            <a href="{{url('checkout')}}" class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</a>
        </li>
    </ul>
</li>


