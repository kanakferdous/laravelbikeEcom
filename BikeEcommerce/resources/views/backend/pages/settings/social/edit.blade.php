@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Edit Social Share</h3>
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
                                        <h3 class="panel-title">Edit Social Share</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="{{'/social/'.$item->id}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        @section('editmethod')
                                        @show
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value = "{{$item-> name}}" id="brand-name-input" class="form-control" placeholder="Social Name" name="socialname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social URL</label>
                                            <div class="col-md-9">
                                                <input type="url" value = "{{$item-> link}}" id="brand-name-input" class="form-control" placeholder="Social URL" name="socialurl">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social Status</label>
                                            <div class="col-md-9">
                                                <input type="checkbox" class="form-check-input" id="demo-panel-w-switch" name="socialstatus" value="1" @if ($item->status == 1)
                                                {{'checked'}}
                                                @endif>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="brand-info-submit" class="btn btn-primary" value="Update Social">
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