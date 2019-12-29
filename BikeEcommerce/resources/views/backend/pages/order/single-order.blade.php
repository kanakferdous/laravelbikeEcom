@extends('backend.layout.master')
@section('body')
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> All Orders </h3>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ORDER #{{$item->id}} - {{$item->created_at}}</h3>
                    </div>
                    <div class="panel-body">
                        <!--Default Tabs (Left Aligned)-->
                        <!--===================================================-->
                        <div class="tab-base">
                            <!--Nav Tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> Detail </a> </li>
                                <li> <a data-toggle="tab" href="#demo-lft-tab-2">Invoice</a> </li>
                                <li> <a data-toggle="tab" href="#demo-lft-tab-3">Credit Memos</a> </li>
                            </ul>
                            <!--Tabs Content-->
                            <div class="tab-content">
                                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <h4 class="text-thin"> <i class="fa fa-user"></i> Customer Information </h4>
                                            <div class="panel-body">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Customer Name:</td>
                                                            <td>{{$item->fname}} {{$item->lname}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email:</td>
                                                            <td>{{$item->emailaddress}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>State:</td>
                                                            <td>{{$item->state}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number:</td>
                                                            <td>{{$item->phonenumber}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Order Detail </h4>
                                            <div class="panel-body">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Order #:</td>
                                                            <td>{{$item->id}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order Date & Time:</td>
                                                            <td>{{$item->created_at}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order Status:</td>
                                                            @if ($item->status == 'pending')
                                                                <td><span class="label label-warning label-sm">{{$item->status}}</span></td>
                                                                @else
                                                                <td><span class="label label-info label-sm">{{$item->status}}</span></td>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            <td>Grand Total:</td>
                                                            <td>{{$item->grand_total}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Information:</td>
                                                            <td>{{$item->payment_status}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <h4 class="text-thin"> <i class="fa fa-user"></i> Billing Address </h4>
                                            <div class="panel-body">
                                                <address>
                                                    <strong>{{$item->fname}} {{$item->lname}}</strong><br />
                                                    {{$item->address}}<br />
                                                    <abbr title="Phone">P:</abbr>{{$item->phonenumber}}
                                                </address>
                                                <address>
                                                    <strong>Email Address</strong><br />
                                                    <a href="mailto:{{$item->emailaddress}}">{{$item->emailaddress}}</a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Shipping Address </h4>
                                            <div class="panel-body">
                                                <address>
                                                    <strong>{{$item->fname}} {{$item->lname}}</strong><br />
                                                    {{$item->address}}<br />
                                                    <abbr title="Phone">P:</abbr>{{$item->phonenumber}}
                                                </address>
                                                <address>
                                                    <strong>Full Name</strong><br />
                                                    <a href="mailto:{{$item->emailaddress}}">{{$item->emailaddress}}</a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Invoice Description </h4>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <td><strong>Item</strong></td>
                                                                <td class="text-center"><strong>Price</strong></td>
                                                                <td class="text-center"><strong>Quantity</strong></td>
                                                                <td class="text-right"><strong>Totals</strong></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach (Cart::getContent() as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td class="text-center">$10.99</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-right">$10.99</td>
                                                            </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                                <td class="thick-line text-right">$670.99</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                                <td class="no-line text-right">$15</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                                <td class="no-line text-right">$685.99</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="demo-lft-tab-2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h3>Invoice</h3>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <h3>Order # 12313232 </h3>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <address>
                                                <strong>Billed To:</strong><br />
                                                John Smith<br />
                                                1234 Main<br />
                                                Apt. 4B<br />
                                                Springfield, ST 54321
                                            </address>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <address>
                                                <strong>Shipped To:</strong><br />
                                                Jane Smith<br />
                                                1234 Main<br />
                                                Apt. 4B<br />
                                                Springfield, ST 54321
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row pad-btm">
                                        <div class="col-xs-6">
                                            <strong>Payment Method:</strong><br />
                                            Visa ending **** 4242<br />
                                            jsmith@email.com
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <strong>Order Date:</strong><br />
                                            March 7, 2014<br />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                                    <td class="text-right"><strong>Totals</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>BS-200</td>
                                                                    <td class="text-center">$10.99</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$10.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-400</td>
                                                                    <td class="text-center">$20.00</td>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-right">$60.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-1000</td>
                                                                    <td class="text-center">$600.00</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$600.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                                    <td class="thick-line text-right">$670.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                                                    <td class="no-line text-right">$15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Total</strong></td>
                                                                    <td class="no-line text-right">$685.99</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="demo-lft-tab-3" class="tab-pane fade">
                                    <div class="panel">
                                        <!-- Foo Table - Filtering -->
                                        <!--===================================================-->
                                        <div class="panel-body">
                                                <div class="pad-btm form-inline">
                                                    <div class="row">
                                                        <div class="col-sm-6 text-xs-center">
                                                            <div class="form-group">
                                                                <label class="control-label">Status</label>
                                                                <select id="demo-foo-filter-status" class="form-control">
                                                                    <option value="">Show all</option>
                                                                    <option value="active">Active</option>
                                                                    <option value="disabled">Disabled</option>
                                                                    <option value="suspended">Suspended</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-xs-center text-right">
                                                            <div class="form-group">
                                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                                <thead>
                                                    <tr>
                                                        <th data-toggle="true">First Name</th>
                                                        <th class="hidden-xs">Last Name</th>
                                                        <th data-hide="phone, tablet">Job Title</th>
                                                        <th data-hide="phone, tablet" class="hidden-xs">DOB</th>
                                                        <th data-hide="phone, tablet">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Albert</td>
                                                        <td class="hidden-xs">Desouza</td>
                                                        <td>System Architect</td>
                                                        <td class="hidden-xs">22 Jun 1972</td>
                                                        <td><span class="label label-table label-success">Active</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Teresa </td>
                                                        <td class="hidden-xs">L. Doe</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td class="hidden-xs">3 Oct 1981</td>
                                                        <td><span class="label label-table label-dark">Disabled</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Veronica </td>
                                                        <td class="hidden-xs">Gusikowski</td>
                                                        <td>Civil Engineer/td>
                                                        <td class="hidden-xs">19 Apr 1969</td>
                                                        <td><span class="label label-table label-danger">Suspended</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bruce </td>
                                                        <td class="hidden-xs">Rogahn</td>
                                                        <td>CEO</td>
                                                        <td class="hidden-xs">13 Dec 1977</td>
                                                        <td><span class="label label-table label-success">Active</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semantha</td>
                                                        <td class="hidden-xs">Halladay</td>
                                                        <td>Junior Technical Assistant</td>
                                                        <td class="hidden-xs">30 Dec 1991</td>
                                                        <td><span class="label label-table label-danger">Suspended</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stevan </td>
                                                        <td class="hidden-xs">Hickle</td>
                                                        <td>Business Services Sales Representative</td>
                                                        <td class="hidden-xs">17 Oct 1987</td>
                                                        <td><span class="label label-table label-dark">Disabled</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carolina </td>
                                                        <td class="hidden-xs">Hickle</td>
                                                        <td>Business Services Sales Representative</td>
                                                        <td class="hidden-xs">17 Oct 1987</td>
                                                        <td><span class="label label-table label-dark">Disabled</span></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div class="text-right">
                                                                <ul class="pagination"></ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!--===================================================-->
                                        <!-- End Foo Table - Filtering -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Default Tabs (Left Aligned)-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
@endsection