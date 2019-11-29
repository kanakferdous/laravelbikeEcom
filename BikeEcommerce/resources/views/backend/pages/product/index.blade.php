@extends('backend.layout.master')
@section('body')
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> All Products </h3>
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
                        <h3 class="panel-title"> Product Listing </h3>
                    </div>
                    <!-- Foo Table - Filtering -->
                    <!--===================================================-->
                    <div class="panel-body">
                            <div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 text-xs-center">
                                        <div class="form-group">
                                            <a href="{{route('product.create')}}" id="demo-btn-addrow" class="btn btn-primary">Add New Product</a>
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
                                    <th data-toggle="true">ID</th>
                                    <th>Product Name</th>
                                    <th data-hide="phone, tablet">Category</th>
                                    <th data-hide="phone, tablet">Brand</th>
                                    <th data-hide="phone, tablet">Price</th>
                                    <th data-hide="phone, tablet">Offer Price</th>
                                    <th data-hide="phone, tablet">Quantity</th>
                                    <th data-hide="phone, tablet">Date Created</th>
                                    <th data-hide="phone, tablet">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        @foreach ($product->categories as $category)
                                            {{$category->name.' |'}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($product->brands as $brand)
                                            {{$brand->name.' |'}}
                                        @endforeach
                                    </td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->offerprice}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <form action="{{'/product/'. $product->id}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class= "btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                            <a href="{{'/product/'.$product-> id.'/edit'}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{'/product/'.$product-> id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="12" class="footable-visible">
                                        <div class="text-right">
                                            <ul class="pagination"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">»</a></li></ul>
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
    <!--End page content-->
</div>
@endsection