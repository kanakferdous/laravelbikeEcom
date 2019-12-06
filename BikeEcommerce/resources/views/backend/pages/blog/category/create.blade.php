@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Create Post Category </h3>
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
                                        <h3 class="panel-title">Create a New Post Category</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="/postcategory/@yield('editid')" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @section('editmethod')
                                        @show
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Post Category Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="category-name-input" class="form-control" placeholder="Post Category Name" name="postcategoryname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-desc-input">Post Category Description</label>
                                            <div class="col-md-9">
                                                <textarea id="category-desc-input" rows="9" class="form-control" placeholder="Post Category Description" name="postcategorydesc"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-image-input">Post Category Image</label>
                                            <div class="col-md-9">
                                                <input type="file" id="category-image-input" class="form-control" placeholder="Post Category Image" name="postcategoryimg">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-name-input">Post Category Parent ID</label>
                                            <div class="col-md-9">
                                                <input type="text" id="category-name-input" class="form-control" placeholder="Post Category Parent ID" name="postcatparentsid">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="category-info-submit"></label>
                                            <div class="col-md-9">
                                                <input type="submit" id="category-info-submit" class="btn btn-primary" value="Add Post Category">
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