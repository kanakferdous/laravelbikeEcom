@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> Create Post Tags </h3>
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
                            <h3 class="panel-title">Create a New Post Tags</h3>
                        </div>
                        <!-- BASIC FORM ELEMENTS -->
                        <!--===================================================-->
                        <form class="panel-body form-horizontal" action="/tag/@yield('editid')" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @section('editmethod')
                            @show
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="category-name-input">Tag Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="category-name-input" class="form-control" placeholder="Tag Name" name="tagname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="category-desc-input">Tag Description</label>
                                <div class="col-md-9">
                                    <textarea id="category-desc-input" rows="9" class="form-control" placeholder="Tag Description" name="tagdesc"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="category-info-submit"></label>
                                <div class="col-md-9">
                                    <input type="submit" id="category-info-submit" class="btn btn-primary" value="Add New Tag">
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