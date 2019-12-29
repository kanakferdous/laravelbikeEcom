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
                    <li>checkout page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- checkout-area start -->
    <div class="checkout-area pt-130 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="coupon-accordion">
                      <!-- ACCORDION START -->
                      <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                      <div id="checkout-login" class="coupon-content">
                          <div class="coupon-info">
                              <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                              <form action="#">
                                  <p class="form-row-first">
                                      <label>Username or email <span class="required">*</span></label>
                                      <input type="text" />
                                  </p>
                                  <p class="form-row-last">
                                      <label>Password  <span class="required">*</span></label>
                                      <input type="text" />
                                  </p>
                                  <p class="form-row">
                                      <input type="submit" value="Login" />
                                      <label>
                                          <input type="checkbox" />
                                           Remember me
                                      </label>
                                  </p>
                                  <p class="lost-password">
                                      <a href="#">Lost your password?</a>
                                  </p>
                              </form>
                          </div>
                      </div>
                      <!-- ACCORDION END -->
                      <!-- ACCORDION START -->
                      <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                      <div id="checkout_coupon" class="coupon-checkout-content">
                          <div class="coupon-info">
                              <form action="#">
                                  <p class="checkout-coupon">
                                      <input type="text" placeholder="Coupon code" />
                                      <input type="submit" value="Apply Coupon" />
                                  </p>
                              </form>
                          </div>
                      </div>
                      <!-- ACCORDION END -->
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-6 col-md-12 col-12">
                  <form action="{{'/checkout'}}" method="POST">
                    {{ csrf_field() }}
                      <div class="checkbox-form">
                          <h3>Billing Details</h3>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>First Name <span class="required">*</span></label>
                                      <input name="fname" type="text" placeholder="" />
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Last Name <span class="required">*</span></label>
                                      <input name="lname" type="text" placeholder="" />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Company Name</label>
                                      <input name="comname" type="text" placeholder="" />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Address <span class="required">*</span></label>
                                      <input name="address" type="text" placeholder="Street address" />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list">
                                      <label>Town / City <span class="required">*</span></label>
                                      <input name ="city" type="text" />
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>State / County <span class="required">*</span></label>
                                      <input name ="state" type="text" placeholder="" />
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Postcode / Zip <span class="required">*</span></label>
                                      <input name ="zipcode" type="text" />
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Email Address <span class="required">*</span></label>
                                      <input name="emailaddress" type="email" />
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="checkout-form-list">
                                      <label>Phone  <span class="required">*</span></label>
                                      <input name ="phonenumber" type="text" />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                <div class="order-notes">
                                    <div class="checkout-form-list mrg-nn">
                                        <label>Order Notes</label>
                                        <textarea name="ordernotes" id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="checkout-form-list create-acc">
                                      <input id="cbox" type="checkbox" />
                                      <label>Create an account?</label>
                                  </div>
                                  <div id="cbox_info" class="checkout-form-list create-account">
                                      <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                      <label>Account password  <span class="required">*</span></label>
                                      <input type="password" placeholder="password" />
                                  </div>
                              </div>
                              <div class="order-button-payment">
                                  <input type="submit" value="Place order" />
                              </div>
                              @php
                                $cartTotalQuantity = Cart::getTotalQuantity();
                                $subtotal = Cart::getSubTotal();
                                $cartCollection = Cart::getContent();
                              @endphp
                              @foreach (Cart::getContent() as $item)
                              <input name="grand_total" type="hidden" value="{{$subtotal}}">
                              <input name="item_quantity" type="hidden" value="{{$cartCollection->count()}}">
                              @endforeach
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                  <div class="your-order">
                      <h3>Your order</h3>
                      <div class="your-order-table table-responsive">
                          <table>
                              <thead>
                                  <tr>
                                      <th class="product-name">Product</th>
                                      <th class="product-total">Total</th>
                                  </tr>
                              </thead>
                              @php
                                  $cartCollection = Cart::getContent();
                                  $total = Cart::getTotal();
                                  $subTotal = Cart::getSubTotal();
                                  $cartTotalQuantity = Cart::getTotalQuantity();
                              @endphp
                              <tbody>
                                @foreach (Cart::getContent() as $item)
                                  <tr class="cart_item">
                                      <td class="product-name">
                                        {{$item->name}} <strong class="product-quantity">({{$item->price}} × {{$item->quantity}}) </strong>
                                      </td>
                                      <td class="product-total">
                                          <span class="amount">{{$item->price * $item->quantity}}</span>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                              <tfoot>
                                  <tr class="cart-subtotal">
                                      <th>Cart Subtotal</th>
                                      <td><span class="amount">{{$subTotal}}</span></td>
                                  </tr>
                                  <tr class="order-total">
                                      <th>Order Total</th>
                                      <td><strong><span class="amount">{{$total}}</span></strong>
                                      </td>
                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                      <div class="payment-method mt-40">
                          <div class="payment-accordion">
                              <div class="panel-group" id="faq">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                      </div>
                                      <div id="payment-1" class="panel-collapse collapse show">
                                          <div class="panel-body">
                                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                      </div>
                                      <div id="payment-2" class="panel-collapse collapse">
                                          <div class="panel-body">
                                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                      </div>
                                      <div id="payment-3" class="panel-collapse collapse">
                                          <div class="panel-body">
                                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="order-button-payment">
                                  <input type="submit" value="Place order" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- checkout-area end -->
@endsection
