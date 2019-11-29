@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> Create Product </h3>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create a New product</h3>
                        </div>
                        <!-- BASIC FORM ELEMENTS -->
                        <!--===================================================-->
                        <form class="panel-body form-horizontal" action="{{'/product/'.$item->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @section('editmethod')
                            @show
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->name}}" id="product-name-input" class="form-control" placeholder="product Name" name="productname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-desc-input">Product Description</label>
                                <div class="col-md-9">
                                    <textarea id="product-desc-input" rows="9" class="form-control" placeholder="product Description" name="productdesc">{{$item->desc}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Slag</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->slag}}" id="product-name-input" class="form-control" placeholder="product Name" name="productslag">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Quantity</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->quantity}}" id="product-name-input" class="form-control" placeholder="product Name" name="productquantity">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->price}}" id="product-name-input" class="form-control" placeholder="product Name" name="productprice">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Offer Price</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->offerprice}}" id="product-name-input" class="form-control" placeholder="product Name" name="productofferprice">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product SKU Code</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$item->sku}}" id="product-name-input" class="form-control" placeholder="product Name" name="productsku">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Status</label>
                                <div class="col-md-9">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="productstatus" value="1" @if ($item->status == 1)
                                        {{'checked'}}
                                    @endif>
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Product Image</label>
                                <div class="col-md-9">
                                    <div class="panel-body">
                                        @foreach ($item->image as $product_image)
                                            <img width ="20%"src="{{asset('/storage/backend/img/product/'. $product_image->file)}}">
                                            <a href="'/delete/'{{$product_image->id}}"><span class="glyphicon glyphicon-trash"></span></a>
                                        @endforeach
                                    </div>
                                    <input type="file" id="product-name-input" class="form-control" placeholder="product Name" name="file[]" multiple>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Category</label>
                                <div class="col-md-9">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">
                                            </label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="categories[]" multiple = "multiple">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}"
                                                    @foreach ($item->categories as $postCategory)
                                                    @if ($postCategory->id == $category->id)
                                                      selected
                                                    @endif
                                                  @endforeach
                                                >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-name-input">Brand</label>
                                <div class="col-md-9">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">
                                            </label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="brands[]" multiple = "multiple">
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}"
                                                @foreach ($item->brands as $postbrand)
                                                @if ($postbrand->id == $brand->id)
                                                    selected
                                                @endif
                                                @endforeach
                                            >{{$brand->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="product-info-submit"></label>
                                <div class="col-md-9">
                                    <input type="submit" id="product-info-submit" class="btn btn-primary" value="Update product">
                                </div>
                            </div>
                        </form>
                        <!--===================================================-->
                        <!-- END BASIC FORM ELEMENTS -->
                    </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection