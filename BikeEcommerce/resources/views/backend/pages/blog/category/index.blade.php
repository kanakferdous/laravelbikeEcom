@extends('backend.layout.master')
@section('body')
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="pageheader">
        <h3><i class="fa fa-home"></i> All Post Categories </h3>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
<div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Add, Remove &amp; Update Post Categories</h3>
        </div>
        <!-- Foo Table - Add & Remove Rows -->
        <!--===================================================-->
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 text-xs-center">
                        <div class="form-group">
                            <a href="{{route('postcategory.create')}}" id="demo-btn-addrow" class="btn btn-primary">Add New Post Category</a>
                        </div>
                    </div>
                    <div class="col-sm-6 text-xs-center text-right">
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle default no-paging footable-loaded footable" data-page-size="7">
                <thead>
                    <tr>
                        <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-first-column footable-sortable footable-sorted">SL. No.<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">Post Category Name<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">Post Category Description<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">Post Category Image<span class="footable-sort-indicator"></span></th>
                        <th class="footable-visible footable-sortable">Post Category Parent ID<span class="footable-sort-indicator"></span></th>
                        <th data-hide="phone, tablet" class="footable-visible footable-sortable">Post Category Create Date<span class="footable-sort-indicator"></span></th>
                        <th data-sort-ignore="true" class="min-width footable-visible footable-last-column">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr class="footable-even" style="display: table-row;">
                        <td class="footable-visible footable-first-column" style="font-weight: bold; font-size: 16px;"><span class="footable-toggle"></span>{{$i}}</td>
                        <td class="footable-visible" style="font-weight: bold; font-size: 16px;">{{$category->name}}</td>
                        <td class="footable-visible" style="width: 50%">{{$category->desc}}</td>
                        <td class="footable-visible"><img width="100px" src="{{ URL::asset('backend/img/postcategory/'.$category->image) }}" style="transform: translate(50%, 0%);"></td>
                        <td class="footable-visible" style="font-weight: bold; font-size: 16px;">{{$category->parentsID}}</td>
                        <td class="footable-visible" style="font-weight: bold; font-size: 16px;">{{$category->created_at}}</td>
                        <td class="footable-visible footable-last-column">
                            <form action="{{'/postcategory/'. $category->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class= "btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                <a href="{{'/postcategory/'.$category-> id.'/edit'}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </form>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="footable-visible">
                            <div class="text-right">
                                <ul class="pagination"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">»</a></li></ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!--===================================================-->
        <!-- End Foo Table - Add & Remove Rows -->
    </div>
</div>
@endsection