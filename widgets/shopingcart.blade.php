
    <a class="fa fa-shopping-cart" href="#"><span class="label red pull-right" style="color: #d3d9e0;">{{Shpcart::cart()->total_items()}}</span></a>
    <ul class="dropdown-menu dropdown-menu-shipping-cart" style="right:-30px;">
        @if(Shpcart::cart()->total_items() > 0)
            @foreach (Shpcart::cart()->contents() as $key => $cart)
            <li>
                <a class="dropdown-menu-shipping-cart-img" href="#">
                    <img src="{{ url(product_image_url($cart['image'],'thumb')) }}" alt="{{ $cart['name'] }}" title="{{ $cart['name'] }}" />
                </a>
                <div class="dropdown-menu-shipping-cart-inner">
                    <p class="dropdown-menu-shipping-cart-price">{{ $cart['qty'] }} x {{ price($cart['price']) }}</p>
                    <p class="dropdown-menu-shipping-cart-item"><a href="#">{{ $cart['name'] }}</a></p>
                </div>
            </li>
            @endforeach
            <li>
                <p class="dropdown-menu-shipping-cart-total">Total: {{ price(Shpcart::cart()->total() ) }}</p>
                <a href="{{ url('checkout') }}" class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</a>
            </li>
        @else
        <li>
            <p class="emptycart">Your shopping cart is empty</p>
        </li>
        @endif
    </ul>



