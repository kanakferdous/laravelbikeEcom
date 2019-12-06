@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Create Social Share</h3>
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
                                        <h3 class="panel-title">Create a New Social Share</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="/social/@yield('editid')" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @section('editmethod')
                                        @show
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="brand-name-input" class="form-control" placeholder="Social Name" name="socialname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social URL</label>
                                            <div class="col-md-9">
                                                <input type="url" id="brand-name-input" class="form-control" placeholder="Social URL" name="socialurl">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Social Status</label>
                                            <div class="col-md-9">
                                                <input name="socialstatus" id="demo-panel-w-switch" type="checkbox" value="1" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="brand-info-submit" class="btn btn-primary" value="Add Social">
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