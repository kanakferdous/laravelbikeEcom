@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Update Division </h3>
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
                                        <h3 class="panel-title">Update Division</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="{{'/division/'.$item->id}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Division Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> name}}" id="brand-name-input" class="form-control" placeholder="Division Name" name="divisionname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="brand-info-submit" class="btn btn-primary" value="Update Division">
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