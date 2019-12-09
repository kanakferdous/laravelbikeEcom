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
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-cart-area pt-120 pb-130">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-content table-responsive">
              <div class="cart_alert">
                @if (session()->has('success_message'))
                    <div class="cacontainer alert-success">
                      {{session()->get('success_message')}}
                    </div>
                @endif
                @php
                    $cartCollection = Cart::getContent();
                    $total = Cart::getTotal();
                    $subTotal = Cart::getSubTotal();
                    $cartTotalQuantity = Cart::getTotalQuantity();
                @endphp
                @if ($cartCollection->count()>0)
                <h3>{{$cartCollection->count()}} Items in Shopping Cart</h3>
                @endif
              </div>
              <table>
                <thead>
                  <tr>
                    <th class="product-price">products name</th>
                    <th class="product-name">price</th>
                    <th class="product-price">quantity</th>
                    <th class="product-quantity">total</th>
                    <th class="product-subtotal">delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach (Cart::getContent() as $item)
                    <tr>
                    {{-- <td class="product-thumbnail">
                      <a href="#"><img src="{{asset('/backend/img/product/'.$item->file)}}" alt=""/></a>
                    </td> --}}
                    <td class="product-name">
                      <a href="{{'/home/'.$item->id}}">{{$item->name}}</a>
                    </td>
                    <td class="product-price">
                      <span class="amount">{{$item->price}}</span>
                    </td>
                    <td class="product-quantity">
                      <div class="quantity-range">
                        <input class="input-text qty text" type="number" step="1" min="0" value="{{$item->quantity}}" title="Qty" size="4"/>
                      </div>
                    </td>
                    <td class="product-subtotal">{{$item->price * $item->quantity}}</td>
                    <td class="product-cart-icon product-subtotal">
                      <form action="{{'/cart/'. $item->id}}" method="POST">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button type="submit"><i class="ti-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="cart-shiping-update">
              <div class="cart-shipping">
                <a class="btn-style cr-btn" href="#">
                  <span>continue shopping</span>
                </a>
              </div>
              <div class="update-checkout-cart">
                <div class="update-cart">
                  <button class="btn-style cr-btn">
                    <span>update</span>
                  </button>
                </div>
                <div class="update-cart">
                  <a class="btn-style cr-btn" href="#">
                    <span>checkout</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 col-sm-6">
            <div class="discount-code">
              <h4>enter your discount code</h4>
              <div class="coupon">
                <input type="text" />
                <input class="cart-submit" type="submit" value="enter" />
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-6">
            <div class="shop-total">
              <h3>cart total</h3>
              <ul>
                <li>
                  sub total
                  <span>{{$subTotal}}</span>
                </li>
                <li>
                  tax
                  <span>$9.00</span>
                </li>
                <li class="order-total">
                  shipping
                  <span>0</span>
                </li>
                <li>
                  order total
                  <span>{{$total}}</span>
                </li>
              </ul>
            </div>
            <div class="cart-btn text-center mb-15">
              <a href="#">payment</a>
            </div>
            <div class="continue-shopping-btn text-center">
              <a href="#">continue shopping</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
