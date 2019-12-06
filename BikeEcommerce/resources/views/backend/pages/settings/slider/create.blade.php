@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Create Slider </h3>
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
                                        <h3 class="panel-title">Create a New Slider</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="/slider/@yield('editid')" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @section('editmethod')
                                        @show
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-name-input">Slider Title</label>
                                            <div class="col-md-9">
                                                <input type="text" id="brand-name-input" class="form-control" placeholder="Slider Title" name="slidertitle">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-desc-input">Slider Description</label>
                                            <div class="col-md-9">
                                                <textarea id="brand-desc-input" rows="9" class="form-control" placeholder="Slider Description" name="sliderdesc"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-image-input">Slider Image</label>
                                            <div class="col-md-9">
                                                <input type="file" id="brand-image-input" class="form-control" placeholder="Slider Image" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brand-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="brand-info-submit" class="btn btn-primary" value="Add Slider">
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