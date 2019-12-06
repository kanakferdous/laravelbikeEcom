@extends('frontend.layout.master')
@section('body')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('frontend/assets/img/banner/banner-4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Shop</h2>
                <ul>
                    <li>
                        <a href="/home">home</a>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-sidebar-area pr-60">
                            <div class="sidebar-widget pb-55">
                                <h3 class="sidebar-widget">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search Products...">
                                        <button><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget pb-50">
                                <h3 class="sidebar-widget">by categories</h3>
                                <div class="widget-categories">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{'/product/category/'. $category->id}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pb-50">
                                <h3 class="sidebar-widget">by brands</h3>
                                <div class="widget-categories">
                                    <ul>
                                        @foreach ($brands as $brand)
                                            <li>
                                                <a href="{{'/product/brand/'. $brand->id}}">{{$brand->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-55">
                                <h3 class="sidebar-widget">by price</h3>
                                <div class="price_filter mr-60">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-55">
                                <h3 class="sidebar-widget">by color</h3>
                                <div class="product-color">
                                    <ul>
                                        <li class="blue">b</li>
                                        <li class="yellow">y</li>
                                        <li class="gray">g</li>
                                        <li class="puce">pu</li>
                                        <li class="black">b</li>
                                        <li class="pink">p</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-widget">product tags</h3>
                                <div class="product-tags">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bag</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Tie</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Dress</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-55">
                                <h3 class="sidebar-widget">compare</h3>
                                <div class="product-compare">
                                    <ul>
                                        <li><a href="#">Gloriori GSX 250 R <span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                        <li><a href="#">Klager GSX 250 R<span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                        <li><a href="#">Maxclon ZPE 54 <span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a></li>
                                    </ul>
                                </div>
                                <div class="compare-text-btn">
                                    <div class="compare-text">
                                        <h5>Clear All</h5>
                                    </div>
                                    <div class="compare-btn">
                                        <a href="#">Compare</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget">best seller</h3>
                                <div class="best-seller">
                                    <div class="single-best-seller">
                                        <div class="best-seller-img">
                                            <a href="#"><img src="assets/img/product/product-12.jpg" alt=""></a>
                                        </div>
                                        <div class="best-seller-text">
                                            <h3><a href="#">Minimal White Shoes</a></h3>
                                            <span>$39.9</span>
                                        </div>
                                    </div>
                                    <div class="single-best-seller">
                                        <div class="best-seller-img">
                                            <a href="#"><img src="assets/img/product/product-13.jpg" alt=""></a>
                                        </div>
                                        <div class="best-seller-text">
                                            <h3><a href="#">Minimal White Shoes</a></h3>
                                            <span>$39.9</span>
                                        </div>
                                    </div>
                                    <div class="single-best-seller">
                                        <div class="best-seller-img">
                                            <a href="#"><img src="assets/img/product/product-14.jpg" alt=""></a>
                                        </div>
                                        <div class="best-seller-text">
                                            <h3><a href="#">Minimal White Shoes</a></h3>
                                            <span>$39.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="grid-list-options">
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                                    <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-sorting">
                                <div class="shop-product-sorting nav">
                                    <a class="active" data-toggle="tab" href="#new-product">NEW BIKES </a>
                                    <a  data-toggle="tab" href="#use-product"> USED BIKES </a>
                                    <a data-toggle="tab" href="#accessory-product">ACCESSORIES</a>
                                </div>
                                <div class="sorting sorting-bg-1">
                                    <form>
                                        <select class="select">
                                            <option value="">Default softing </option>
                                            <option value="">Sort by news</option>
                                            <option value="">Sort by price</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper tab-content">
                            <div id="new-product" class="product-grid product-view tab-pane active">
                                <div class="row">
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
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                        <i class=" ti-shopping-cart"></i>
                                                    </a>
                                                    <a class="action-cart-2" title="Wishlist" href="#">
                                                        <i class=" ti-heart"></i>
                                                    </a>
                                                    <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#{{$product->id}}" href="#">
                                                        <i class=" ti-zoom-in"></i>
                                                    </a>
                                                </div>
                                                <div class="product-content-wrapper">
                                                    <div class="product-title-spreed">
                                                        <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{ $product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>{{ $product->price}}</span>
                                                </div>
                                                <p>{{ $product->desc}}</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                    <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span class="icofont icofont-close" aria-hidden="true"></span>
                                            </button>
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="qwick-view-left">
                                                            <div class="quick-view-learg-img">
                                                                <div class="quick-view-tab-content tab-content">
                                                                    @php
                                                                        $i=1;
                                                                    @endphp
                                                                    @foreach ($product->image as $product_image)
                                                                        @if ($i>0)
                                                                        <div class="tab-pane active show fade" id="{{$product_image->id}}" role="tabpanel">
                                                                            <img src="{{asset('storage/backend/img/product/'. $product_image->file)}}" alt="">
                                                                        </div>
                                                                        @endif
                                                                    @php
                                                                        $i--;
                                                                    @endphp
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="qwick-view-right">
                                                            <div class="qwick-view-content">
                                                                <h3>{{$product->name}}</h3>
                                                                <div class="price">
                                                                    <span class="new">{{$product->price}}</span>
                                                                    <span class="old">{{$product->offerprice}}</span>
                                                                </div>
                                                                <div class="rating-number">
                                                                    <div class="quick-view-rating">
                                                                        <i class="fa fa-star reting-color"></i>
                                                                        <i class="fa fa-star reting-color"></i>
                                                                        <i class="fa fa-star reting-color"></i>
                                                                        <i class="fa fa-star reting-color"></i>
                                                                        <i class="fa fa-star reting-color"></i>
                                                                    </div>
                                                                </div>
                                                                <p>{{$product->desc}}</p>
                                                                <div class="quick-view-select">
                                                                    <div class="select-option-part">
                                                                        <label>Size*</label>
                                                                        <select class="select">
                                                                            <option value="">- Please Select -</option>
                                                                            <option value="">900</option>
                                                                            <option value="">700</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="select-option-part">
                                                                        <label>Color*</label>
                                                                        <select class="select">
                                                                            <option value="">- Please Select -</option>
                                                                            <option value="">orange</option>
                                                                            <option value="">pink</option>
                                                                            <option value="">yellow</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="quickview-plus-minus">
                                                                    <div class="cart-plus-minus">
                                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                    </div>
                                                                    <div class="quickview-btn-cart">
                                                                        <a class="btn-style" href="#">add to cart</a>
                                                                    </div>
                                                                    <div class="quickview-btn-wishlist">
                                                                        <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="use-product" class="product-grid product-view tab-pane">
                                <div class="row">
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-6.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>270 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Gloriori GSX 250 R</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-5.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>300 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Klager GSX 250 R</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-4.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>250 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Matrio Max</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Matrio Max</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-3.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>150 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Demonissi Gori</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-2.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>280 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Maxclon ZPE 54</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-1.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>290 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Rigoniss Z 1000</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-6.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>220 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Klager GSX 250 R</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-5.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>210 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Gloriori GSX 250 R</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-4.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>250 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Demonissi Gori</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="accessory-product" class="product-grid product-view tab-pane">
                                <div class="row">
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-7.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>270 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Aeri Carbon Helmet</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Aeri Carbon Helmet</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-8.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>300 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Reckles Jacket</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-9.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>250 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Softy Original Glove</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-10.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>150 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-11.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>280 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-7.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>290 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Aeri Carbon Helmet</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Aeri Carbon Helmet</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-8.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>220 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Reckles Jacket</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-9.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>210 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Softy Original Glove</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                        <div class="product-wrapper mb-35">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-10.jpg" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2018</li>
                                                        <li>MANUAL</li>
                                                        <li>PETROL</li>
                                                        <li>250 CC</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
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
                                                        <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                        <span>6600 RPM</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-list-details">
                                                <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                <div class="quick-view-rating">
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                    <i class="fa fa-star reting-color"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <div class="shop-list-cart">
                                                    <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginations text-center mt-20">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
