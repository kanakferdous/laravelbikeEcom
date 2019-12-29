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
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Product Order</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-vcenter">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Name</th>
                                    <th class="text-center">Value</th>
                                    <th class="hidden-xs">Order date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>Order #{{$order->id}}</td>
                                        <td>
                                            <span class="text-semibold">{{$order->fname}} {{$order->lname}}</span>
                                            <br>
                                            <small class="text-muted">{{$order->item_count}} Order Items</small>
                                        </td>
                                        <td class="text-center">{{$order->grand_total}}</td>
                                        <td class="hidden-xs">{{$order->created_at->format('d M Y')
                                        }}</td>
                                        <td>
                                            @if ($order->status == 'pending')
                                                <div class="label label-table label-warning">{{$order->status}}</div>
                                                @else
                                                <div class="label label-table label-info">{{$order->status}}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{'/order/'. $order->id}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class= "btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                <a href="{{'/order/'.$order-> id.'/edit'}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="{{'/order/'.$order-> id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
@endsection