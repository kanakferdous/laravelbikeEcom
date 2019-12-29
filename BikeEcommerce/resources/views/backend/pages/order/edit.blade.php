@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Update Category </h3>
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
                                        <h3 class="panel-title">Update Category</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="{{'/category/'.$item->id}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Category Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> name}}" id="category-name-input" class="form-control" placeholder="category Name" name="categoryname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-desc-input">Category Description</label>
                                            <div class="col-md-9">
                                                <textarea id="category-desc-input" rows="9" class="form-control" placeholder="category Description" name="categorydesc">{{$item-> desc}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-image-input">Category Image</label>
                                            <div class="col-md-9">
                                                <img src="{{asset('backend/img/category/')}}/{{$item-> image}}">
                                                <input type="file" id="category-image-input" class="form-control" placeholder="category Image" name="categoryimg">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Parent ID</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$item-> parentsID}}" id="category-name-input" class="form-control" placeholder="category Name" name="parentsid">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="category-info-submit" class="btn btn-primary" value="Update category">
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