<header>
    <div class="header-area transparent-bar ptb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="logo-small-device">
                        <a href="index.html"><img alt="" src="{{asset('frontend/assets/img/logo/logo.png')}}"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-8">
                    <div class="header-contact-menu-wrapper pl-45">
                        <div class="header-contact">
                            <p>WANT TO TALK WITH US  +01254 265 987</p>
                        </div>
                        <div class="menu-wrapper text-center">
                            <button class="menu-toggle">
                                <img class="s-open" alt="" src="{{asset('frontend/assets/img/icon-img/menu.png')}}">
                                <img class="s-close" alt="" src="{{asset('frontend/assets/img/icon-img/menu-close.png')}}">
                            </button>
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a></li>
                                        <li class="active"><a href="about-us.html">about us </a></li>
                                        <li><a href="#">shop</a>
                                            <ul>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="login-register.html">login</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact us</a></li>
                                        @if(Auth::guest())
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart cart-small-device">
                        <button class="icon-cart">
                            <i class="ti-shopping-cart"></i>
                            <span class="count-style">02</span>
                            <span class="count-price-add">$295.95</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                        <span>Price: $275</span>
                                        <span>Qty: 01</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                    </div>
                                </li>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h3><a href="#">Demonissi Gori</a></h3>
                                        <span>Price: $275</span>
                                        <span class="qty">Qty: 01</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                    </div>
                                </li>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt="" src="assets/img/cart/cart-3.jpg"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h3><a href="#">Demonissi Gori</a></h3>
                                        <span>Price: $275</span>
                                        <span class="qty">Qty: 01</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-total">
                                <h4>total: <span>$550.00</span></h4>
                            </div>
                            <div class="shopping-cart-btn">
                                <a class="btn-style cr-btn" href="{{route('cart.index')}}">Go to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area col-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="login-register.html">login</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog page</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact us</a></li>
                                <li><a href="#"> Login </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-cart-wrapper">
            @php
                $cartTotalQuantity = Cart::getTotalQuantity();
                $subtotal = Cart::getSubTotal();
                $cartCollection = Cart::getContent();
            @endphp
            <div class="header-cart">
                <button class="icon-cart">
                    <i class="ti-shopping-cart"></i>
                    <span class="count-style">{{$cartCollection->count()}}</span>
                    <span class="count-price-add">{{$subtotal}}</span>
                </button>
                <div class="shopping-cart-content">
                    <ul>
                        @foreach (Cart::getContent() as $item)
                        <li class="single-shopping-cart">
                            <div class="shopping-cart-img">
                                <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h3><a href="{{'/home/'.$item->id}}">{{$item->name}}</a></h3>
                                <span>Price: {{$item->price}}</span>
                                <span>Qty: {{$item->quantity}}</span>
                            </div>
                            <div class="shopping-cart-delete">
                                <form action="{{'/cart/'. $item->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button type="submit"><i class="icofont icofont-ui-delete"></i></button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="shopping-cart-total">
                        <h4>total: <span>{{$subtotal}}</span></h4>
                    </div>
                    <div class="shopping-cart-btn">
                        <a class="btn-style cr-btn" href="{{route('cart.index')}}">Go to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>