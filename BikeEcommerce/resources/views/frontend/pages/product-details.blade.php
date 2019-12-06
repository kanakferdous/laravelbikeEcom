@extends('frontend.layout.master')
@section('body')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('frontend/assets/img/banner/banner-4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>{{$item->name}}</h2>
                <ul>
                    <li>
                        <a href="/home">home</a>
                    </li>
                    <li>{{$item->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area fluid-padding-3 ptb-130">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-40">
                            <div class="product-details-large tab-content">
                                @foreach ($item->image as $image)
                                <div class="tab-pane active" id="{{$image->id}}">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{asset('storage/backend/img/product/'. $image->file)}}">
                                            <img src="{{asset('storage/backend/img/product/'. $image->file)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                @foreach ($item->image as $image)
                                <a class="active" href="#{{$image->id}}">
                                    <img src="{{asset('storage/backend/img/product/'. $image->file)}}" alt="">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <h2>{{$item->name}}</h2>
                        <div class="quick-view-rating">
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <i class="fa fa-star reting-color"></i>
                            <span> ( 01 Customer Review )</span>
                        </div>
                        <div class="product-price">
                            @if(is_null($item->offerprice))
                                <span>{{ $item->price}}</span>
                                @elseif(!is_null($item->offerprice))
                                <span><del>{{ $item->price}}</del>{{$item->offerprice}}</span>
                                @endif
                        </div>
                        <div class="product-overview">
                            <h5 class="pd-sub-title">Product Overview</h5>
                            <p>{{$item->desc}}</p>
                        </div>
                        <div class="product-color">
                            <h5 class="pd-sub-title">Product color</h5>
                            <ul>
                                <li class="red">b</li>
                                <li class="pink">p</li>
                                <li class="blue">b</li>
                                <li class="sky2">b</li>
                                <li class="green">y</li>
                                <li class="purple2">g</li>
                            </ul>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover cr-btn" href="#"><span><i class="icofont icofont-heart-alt"></i></span></a>
                            </div>
                        </div>
                        <div class="product-categories">
                            <h5 class="pd-sub-title">Categories</h5>
                            <ul>
                                @foreach ($item->categories as $category)
                                <li>
                                    <a href="{{'/product/category/'. $category->id}}">{{$category->name.','}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product-categories">
                            <h5 class="pd-sub-title">Brand</h5>
                            <ul>
                                @foreach ($item->brands as $brand)
                                <li>
                                    <a href="{{'/product/brand/'. $brand->id}}">{{$brand->name.','}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product-share">
                            <h5 class="pd-sub-title">Share</h5>
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
