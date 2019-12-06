@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Update District </h3>
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
                                        <h3 class="panel-title">Update District</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="{{'/district/'.$item->id}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">District Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> name}}" id="brand-name-input" class="form-control" placeholder="District Name" name="districtname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name-input">Divisions</label>
                                            <div class="col-md-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="divisionid">
                                                        <option selected>Choose...</option>
                                                        @foreach ($divisions as $division)
                                                        <option value="{{$division->id}}"
                                                                @if ($division->id == $item->division_id)
                                                                selected
                                                                @endif
                                                            >{{$division->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="brand-info-submit" class="btn btn-primary" value="Update District">
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