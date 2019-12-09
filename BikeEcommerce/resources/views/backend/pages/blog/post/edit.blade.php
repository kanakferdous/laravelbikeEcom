@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Update Posts </h3>
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
                                        <h3 class="panel-title">Update Post</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="{{'/post/'.$item->id}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Post Title</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> title}}" id="category-name-input" class="form-control" placeholder="Post Category Name" name="posttitle">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Post Sub Title</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> subtitle}}" id="category-name-input" class="form-control" placeholder="Post Category Name" name="postsubtitle">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-desc-input">Post Content</label>
                                            <div class="col-md-9">
                                                <textarea id="category-desc-input" rows="9" class="form-control" placeholder="Post Content" name="postdesc">{{$item-> desc}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-image-input">Post Fetured Image</label>
                                            <div class="col-md-9">
                                                <img src="{{asset('backend/img/post/')}}/{{$item-> image}}">
                                                <input type="file" id="category-image-input" class="form-control" placeholder="Post Featured Image" name="postimg">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name-input">Categories</label>
                                            <div class="col-md-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="" multiple = "multiple">
                                                        <option selected>Choose...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name-input">Tags</label>
                                            <div class="col-md-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01" name="" multiple = "multiple">
                                                        <option selected>Choose...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name-input">Post Status</label>
                                            <div class="col-md-9">
                                                <input type="checkbox" name="poststatus" class="form-check-input" id="exampleCheck1" value="1" >
                                                <label class="form-check-label" for="exampleCheck1">Publish</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="category-info-submit" class="btn btn-primary" value="Update Post">
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