@extends('backend.layout.master')
@section('body')
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> Product Details </h3>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
<div class="panel">
        <!-- Foo Table - Add & Remove Rows -->
        <!--===================================================-->
        <div class="panel-body">
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <!--Product Details Start-->
                                        <!--===================================================-->
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-user"></i> Product Information </h4>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td>Product Name:</td>
                                                                <td>{{$item->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Description:</td>
                                                                <td>{{$item->desc}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Price:</td>
                                                                <td>{{$item->price}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Offer Price:</td>
                                                                <td>{{$item->offerprice}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Slag:</td>
                                                                <td>{{$item->slag}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Quantity:</td>
                                                                <td>{{$item->quantity}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product SKU:</td>
                                                                <td>{{$item->sku}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Status:</td>
                                                                <td>{{$item->status}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Category:</td>
                                                                <td>
                                                                    @foreach ($item->categories as $category)
                                                                    {{$category->name.' |'}}
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Brand:</td>
                                                                <td>
                                                                    @foreach ($item->brands as $brand)
                                                                    {{$brand->name.' |'}}
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product Details End-->
                                        <!--===================================================-->

                                        <!--Product Gallery Start-->
                                        <!--===================================================-->
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <h4 class="text-thin"> <i class="fa fa-shopping-cart"></i> Gallery </h4>
                                                <div class="panel-body">
                                                    @foreach ($item->image as $product_image)
                                                        <img width ="20%"src="{{asset('/storage/backend/img/product/'. $product_image->file)}}">
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product Gallery End-->
                                        <!--===================================================-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
        </div>
        <!--===================================================-->
        <!-- End Foo Table - Add & Remove Rows -->
    </div>
</div>
@endsection