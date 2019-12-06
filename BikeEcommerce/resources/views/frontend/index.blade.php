@extends('frontend.layout.master')
@section('body')
<div class="slider-area">
        <div class="slider-active owl-carousel">
                @foreach ($sliders as $slider)
                <div class="single-slider slider-1" style="background-image: url({{asset('frontend/assets/img/slider/slider-bg.jpg')}})">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <div class="slider-img text-center">
                                <img class="animated" src="{{asset('backend/img/slider/'. $slider->image)}}" alt="slider images">
                            </div>
                            <div class="slider-text-img">
                                <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                <img class="animated" src="{{asset('frontend/assets/img/icon-img/bike.png')}}" alt="slider images">
                            </div>
                            <h2 class="animated">MOTORCYCLE</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        <div class="slider-social">
            <ul>
                @foreach ($socials as $social)
                    <li class="{{$social->name}}"><a href="{{$social->link}}"><i class="icofont icofont-social-{{$social->name}}"></i></a></li>
                @endforeach
            </ul>
        </div>
        <div class="language-currency-wrapper">
            <div class="language-currency">
                <div class="language">
                    <select class="select-header orderby">
                        <option value="">ENG</option>
                        <option value="">BANGLA </option>
                        <option value="">HINDI</option>
                    </select>
                </div>
                <div class="currency">
                    <select class="select-header orderby">
                        <option value="">$USD</option>
                        <option value="">US </option>
                        <option value="">EURO</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
<div class="overview-area pt-135">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="overview-content">
                    <h1><span>OSWAN</span> WORLD MOST </h1>
                    <h2>LATGEST <span>MOTORCYCLE STORE</span></h2>
                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                    <div class="question-area">
                        <h4>HAVE ANY QUESTION? </h4>
                        <div class="question-contact">
                            <div class="question-icon">
                                <i class="icofont icofont-phone"></i>
                            </div>
                            <div class="question-content-number">
                                <h6> 01245 658 698</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="overview-img">
                    <img class="tilter" src="{{asset('frontend/assets/img/banner/banner-1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pt-135 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="#"><img src="{{asset('frontend/assets/img/banner/banner-1.jpg')}}" alt="image"></a>
                    <div class="banner-content">
                        <h2>BUY NEW BIKE</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="#"><img src="{{asset('frontend/assets/img/banner/banner-2.jpg')}}" alt="image"></a>
                    <div class="banner-content">
                        <h2>SELL YOUR BIKE</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="#"><img src="{{asset('frontend/assets/img/banner/banner-3.jpg')}}" alt="image"></a>
                    <div class="banner-content">
                        <h2>FIND SPARE PARTS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>CHOOSE YOUR BIKE</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="product-wrapper-bundle">
            <div class="row">
                {{-- Product Query Start --}}
                @foreach ($products as $product)
                <div class="product-width col-md-6 col-xl-4 col-lg-6">
                    <div class="product-wrapper mb-35">
                        <div class="product-img">
                            <a href="/home/{{$product->id}}">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($product->image as $product_image)
                                    @if ($i>0)
                                    <img src="{{asset('storage/backend/img/product/'. $product_image->file)}}" alt="">
                                    @endif
                                @php
                                    $i--;
                                @endphp
                                @endforeach
                            </a>
                            <div class="product-action">
                                <a class="action-plus-2" title="Add To Cart" href="#">
                                    <i class=" ti-shopping-cart"></i>
                                </a>
                                <a class="action-cart-2" title="Wishlist" href="#">
                                    <i class=" ti-heart"></i>
                                </a>
                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class=" ti-zoom-in"></i>
                                </a>
                            </div>
                            <div class="product-content-wrapper">
                                <div class="product-title-spreed">
                                    <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                </div>
                                <div class="product-price">
                                    @if(is_null($product->offerprice))
                                        <span>{{ $product->price}}</span>
                                        @elseif(!is_null($product->offerprice))
                                        <span><del>{{ $product->price}}</del>{{$product->offerprice}}</span>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Product Query End --}}
            </div>
        </div>
    </div>
</div>
<div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url({{asset('frontend/assets/img/banner/banner-4.jpg')}})">
    <div class="container-fluid">
        <div class="latest-product-slider owl-carousel">
            @foreach ($products as $product)
            <div class="single-latest-product slider-animated-2">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="latest-product-img">
                            @php
                                $i=1;
                            @endphp
                            @foreach ($product->image as $product_image)
                            @if ($i>0)
                                <img class="animated" src="{{asset('storage/backend/img/product/'.$product_image->file)}}" alt="">
                            @endif
                            @php
                                $i--;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="latest-product-content">
                            <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                            <p class="animated"><span>{{$product->name}}</span>{{$product->desc}}</p>
                            <div class="latest-price">
                                <h3 class="animated">NOW AT <span>${{$product->offerprice}}</span></h3>
                                @php
                                    $regprice = $product->price;
                                    $offprice = $product->offerprice;
                                    $discount = ($regprice-$offprice)%100;
                                @endphp
                                <span class="animated">
                                    {{$discount}}% DISCOUNT</span>
                            </div>
                            <div class="latext-btn">
                                <a class="animated" href="#">SELECT A BIKE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="accessories-area pt-152 pb-130">
    <div class="container-fluid">
        <div class="section-title section-fluid text-center mb-60">
            <h2>ACCESSORIES</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="accessories-wrapper">
            <div class="product-accessories-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/product/product-7.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $120</span>
                                <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-8.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $180</span>
                                <h4><a href="product-details.html">Reckles Jacket</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-9.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $25</span>
                                <h4><a href="product-details.html">Softy Original Glove</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-10.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $140</span>
                                <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-11.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $150</span>
                                <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-7.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $150</span>
                                <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-8.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $160</span>
                                <h4><a href="product-details.html">Reckles Jacket</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('frontend/assets/img/product/product-9.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus-2" title="Add To Cart" href="#">
                                <i class=" ti-shopping-cart"></i>
                            </a>
                            <a class="action-cart-2" title="Wishlist" href="#">
                                <i class=" ti-heart"></i>
                            </a>
                            <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class=" ti-zoom-in"></i>
                            </a>
                        </div>
                        <div class="product-content-wrapper-2">
                            <div class="product-title-price-2 text-center">
                                <span>Price: $120</span>
                                <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-area">
    <div class="container">
        <div class="section-title-2 section-title-position">
            <h2>OUR CLIENTS REVIEW</h2>
        </div>
        <div class="testimonial-active owl-carousel">
            <div class="single-testimonial">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonial-img pl-75">
                            <img alt="image" src="{{asset('frontend/assets/img/team/testimonial-1.jpg')}}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-content">
                            <div class="testimonial-dec">
                                <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest  qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam quoten</p>
                            </div>
                            <div class="name-designation">
                                <h4>Rayed Ayash Hisham</h4>
                                <span>COO, ASEKHA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="testimonial-img pl-75">
                            <img alt="image" src="{{asset('frontend/assets/img/team/testimonial-2.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="testimonial-content">
                            <div class="testimonial-dec">
                                <p><span>OSWAN</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis dolor in reprehenderit.</p>
                            </div>
                            <div class="name-designation">
                                <h4>James Momen Nirob</h4>
                                <span>CEO, ASEKHA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-150 pb-110">
    <div class="container">
        <div class="section-title text-center mb-60">
            <h2>BLOG POST</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog-hm-1.jpg')}}" alt="image"></a>
                        <div class="blog-date">
                            <h4>24 February, 2018</h4>
                        </div>
                        <div class="blog-hm-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details.html">Sports Motorbike for play in desert </a></h3>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog-hm-2.jpg')}}" alt="image"></a>
                        <div class="blog-date">
                            <h4>22 February, 2018</h4>
                        </div>
                        <div class="blog-hm-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details.html">Motorbike Racing at October</a></h3>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-hm-wrapper mb-40">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog-hm-3.jpg')}}" alt="image"></a>
                        <div class="blog-date">
                            <h4>20 February, 2018</h4>
                        </div>
                        <div class="blog-hm-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-hm-content">
                        <h3><a href="blog-details.html">Latest Motorbike Release this Year </a></h3>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection