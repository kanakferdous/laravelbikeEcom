@extends('backend.layout.master')
@section('body')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="profilebody">
        <div class="pad-all animated fadeInDown">
        <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">Users</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">Inbox</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">FAQ</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">Settings</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">Calender</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
            <div class="panel panel-default mar-no">
                <div class="panel-body">
                <a href="JavaScript:void(0);">
                    <div class="pull-left"> <p class="profile-title text-bricky">Pictures</p> </div>
                    <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Dashboard </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Dashboard </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <!--Flot Line Chart placeholder-->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div id="demo-negativebar" style="height:150px"></div>
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <!--Flot Bar Chart placeholder -->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div id="demo-singlebar" style="height:150px;"></div>
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <!-- World Map -->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <div id="usa-map-markers" style="height: 200px"></div>
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                </div>
                                <div class="col-md-6">
                                    <div class="panel">
                                        <div class="panel-body text-center">
                                            <p>THIS MONTH TOTAL ORDER ($)</p>
                                            <div class="h4 text-primary"> $6,84,545 </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul class="nav nav-section nav-justified">
                                                <li>
                                                    <div class="section pad-no">
                                                        <div class="h4 text-pink text-bold"> 2541 </div>
                                                        <p> New York </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="section">
                                                        <div class="h4 text-azure text-bold"> 12560 </div>
                                                        <p> Montana </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="section">
                                                        <div class="h4 text-mint text-bold"> 5461 </div>
                                                        <p> Texas </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left">New York</span> <small class="pull-right">72%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left"> Montana </span> <small class="pull-right">68%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left"> Texas </span> <small class="pull-right">58%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 58%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left"> Nevada </span> <small class="pull-right">75%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 75%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left"> New Jersey </span> <small class="pull-right">45%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 45%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                                <!-- Progress bars Start -->
                                <div class="col-sm-6 pad-ver-10">
                                    <div class="clearfix"> <span class="pull-left"> California </span> <small class="pull-right">30%</small> </div>
                                    <div class="progress progress-striped progress-sm">
                                        <div class="progress-bar progress-bar-info" style="width: 30%;"></div>
                                    </div>
                                </div>
                                <!-- Progress bars End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <!--Easy Pie Chart-->
                                    <!--===================================================-->
                                    <div id="demo-pie-2" class="pie-title-center" data-percent="45"> <span class="pie-value text-thin"></span> </div>
                                    <!--===================================================-->
                                    <!-- End Easy Pie Chart -->
                                </div>
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <p class="text-muted">Direct Sell</p>
                                            <h4>60%</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="text-muted">Channel Sell</p>
                                            <h4>40%</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <!--Easy Pie Chart-->
                                    <!--===================================================-->
                                    <div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value text-thin"></span> </div>
                                    <!--===================================================-->
                                    <!-- End Easy Pie Chart -->
                                </div>
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <p class="text-muted">Direct Sell</p>
                                            <h4>60%</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="text-muted">Channel Sell</p>
                                            <h4>40%</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel text-center">
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel-body bg-primary pad-ver">
                                <i class="fa fa-facebook fa-5x"></i>
                            </div>
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 12.5k </div>
                                            <p class="mar-no">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 1853 </div>
                                            <p class="mar-no">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 3451 </div>
                                            <p class="mar-no">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel text-center">
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel-body bg-info pad-ver">
                                <i class="fa fa-twitter fa-5x"></i>
                            </div>
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 12.5k </div>
                                            <p class="mar-no">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 1853 </div>
                                            <p class="mar-no">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 3451 </div>
                                            <p class="mar-no">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel text-center">
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel-body bg-warning pad-ver">
                                <i class="fa fa-dollar fa-5x"></i>
                            </div>
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 12.5k </div>
                                            <p class="mar-no">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 1853 </div>
                                            <p class="mar-no">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 3451 </div>
                                            <p class="mar-no">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel text-center">
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel-body bg-danger pad-ver">
                                <i class="fa fa-comments-o fa-5x"></i>
                            </div>
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 12.5k </div>
                                            <p class="mar-no">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 1853 </div>
                                            <p class="mar-no">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <div class="h4 mar-ver-5"> 3451 </div>
                                            <p class="mar-no">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel defaultpanel">
                            <div class="panel-heading">
                                <div class="panel-title">Monthly Statistics <small> based on the User Activities </small></div>
                            </div>
                            <div class="panel-body pad-no">
                                <!--Default Accordion-->
                                <!--===================================================-->
                                <div class="panel-group accordion mar-no" id="statistics">
                                    <div class="panel">
                                        <!--Accordion title-->
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-parent="#statistics" data-toggle="collapse" href="#statisticsone">
                                                    <i class="fa fa-calendar"></i> Top Countries
                                                </a>
                                            </div>
                                        </div>
                                        <!--Accordion content-->
                                        <div class="panel-collapse collapse in" id="statisticsone">
                                            <div class="panel-body">
                                                <table class="table mar-no">
                                                    <thead>
                                                        <tr>
                                                            <th>Country</th>
                                                            <th>Unique User</th>
                                                            <th>Pageviews</th>
                                                            <th>Changes</th>
                                                            <th>New Vs. Return</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>USA</td>
                                                            <td>254152</td>
                                                            <td>635241</td>
                                                            <td>25%</td>
                                                            <td>
                                                                <div class="progress progress-striped progress-md">
                                                                    <div style="width: 75%" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">75% Complete (success)</span>
                                                                    </div>
                                                                    <div style="width: 25%" class="progress-bar progress-bar-info">
                                                                        <span class="sr-only">25% Complete (warning)</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>India</td>
                                                            <td>325614</td>
                                                            <td>524152</td>
                                                            <td>20%</td>
                                                            <td>
                                                                <div class="progress progress-striped progress-md">
                                                                    <div style="width: 45%" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">45% Complete (success)</span>
                                                                    </div>
                                                                    <div style="width: 55%" class="progress-bar progress-bar-info">
                                                                        <span class="sr-only">55% Complete (warning)</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>United kingdom</td>
                                                            <td>124563</td>
                                                            <td>654525</td>
                                                            <td>35%</td>
                                                            <td>
                                                                <div class="progress progress-striped progress-md">
                                                                    <div style="width: 25%" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">25% Complete (success)</span>
                                                                    </div>
                                                                    <div style="width: 75%" class="progress-bar progress-bar-info">
                                                                        <span class="sr-only">75% Complete (warning)</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brazil</td>
                                                            <td>325412</td>
                                                            <td>456985</td>
                                                            <td>35%</td>
                                                            <td>
                                                                <div class="progress progress-striped progress-md">
                                                                    <div style="width: 35%" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">35% Complete (success)</span>
                                                                    </div>
                                                                    <div style="width: 65%" class="progress-bar progress-bar-info">
                                                                        <span class="sr-only">65% Complete (warning)</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel defaultpanel">
                                        <!--Accordion title-->
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-parent="#statistics" data-toggle="collapse" href="#statisticsTwo">
                                                <i class="fa fa-calendar"></i> Age Group </a>
                                            </h4>
                                        </div>
                                        <!--Accordion content-->
                                        <div class="panel-collapse collapse" id="statisticsTwo">
                                            <div class="panel-body">
                                                <table class="table mar-no">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Gender</th>
                                                            <th>Unique User</th>
                                                            <th>Percentage</th>
                                                            <th class="text-center">Changes</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                            <td>18 to 25 year old</td>
                                                            <td class="center">25%</td>
                                                            <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                            <td>26 to 35 year old</td>
                                                            <td class="center">35%</td>
                                                            <td class="text-center"><i class="fa fa-caret-down text-danger fa-2x"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                            <td>36 to 45 year old</td>
                                                            <td class="center">45%</td>
                                                            <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                            <td>46 to 55 year old</td>
                                                            <td class="center">40%</td>
                                                            <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--===================================================-->
                                <!--End Default Accordion-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--Panel with Header-->
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-body">
                                <div id="carousel-example-vertical" class="carousel vertical slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="ticker-headline">
                                                <div class="media">
                                                    <span class="pull-left"><i class="fa fa-twitter fa-4x text-azure"></i></span>
                                                    <div class="media-body">
                                                        <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. Etiam semper bibendum mi, nec tempor sem pharetra sit amet...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ticker-headline">
                                                <div class="media">
                                                    <span class="pull-left"><i class="fa fa-facebook fa-4x text-primary"></i></span>
                                                    <div class="media-body">
                                                        <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. Etiam semper bibendum mi, nec tempor sem pharetra sit amet...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ticker-headline">
                                                <div class="media">
                                                    <span class="pull-left"><i class="fa fa-google-plus fa-4x text-danger"></i></span>
                                                    <div class="media-body">
                                                        <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. Etiam semper bibendum mi, nec tempor sem pharetra sit amet...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Panel with Header-->
                        <!--Panel with Header-->
                        <!--===================================================-->
                        <div class="panel papernote">
                            <div class="panel-body">
                                <div class="carousel slide" id="c-slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <h4>This is my note #1</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. </p>
                                        </div>
                                        <div class="item">
                                            <h4>This is my note #2</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. </p>
                                        </div>
                                        <div class="item">
                                            <h4>This is my note #3</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                Suspendisse id nunc sed massa cursus efficitur. Praesent pulvinar malesuada metus fringilla euismod. Morbi sit amet tincidunt elit. </p>
                                        </div>
                                    </div>
                                    <!--
                                        <a class="left carousel-control" href="#c-slide" data-slide="prev">
                                            <span class="fa fa-angle-left fa-2x"></span>
                                        </a>
                                        <a class="right carousel-control" href="#c-slide" data-slide="next">
                                            <span class="fa fa-angle-right fa-2x"></span>
                                        </a>
                                        -->
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Panel with Header-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> General Table </h3>
                            </div>
                            <div class="panel-body">
                                <!--Hover Rows-->
                                <!--===================================================-->
                                <table class="table table-hover table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project</th>
                                            <th>Project Deadline</th>
                                            <th>Status</th>
                                            <th>Clients</th>
                                            <th class="hidden-xs">Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>IT Help Desk</td>
                                            <td>11 May 2016</td>
                                            <td>
                                                <div class="label label-table label-info">Block</div>
                                            </td>
                                            <td>Semantha Armstrong</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Product Dev</td>
                                            <td>15 May 2016</td>
                                            <td>
                                                <div class="label label-table label-danger">On Hold</div>
                                            </td>
                                            <td>Jonathan Smith</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-success" style="width: 35%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Website Redesign</td>
                                            <td>19 May 2016</td>
                                            <td>
                                                <div class="label label-table label-success">Approved</div>
                                            </td>
                                            <td>Jacob Armstrong</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-info" style="width: 85%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Local Ad</td>
                                            <td>25 May 2016</td>
                                            <td>
                                                <div class="label label-table label-warning">Pending</div>
                                            </td>
                                            <td>Sandra Smith</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-warning" style="width: 45%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Design new theme</td>
                                            <td>28 May 2016</td>
                                            <td>
                                                <div class="label label-table label-warning">Pending</div>
                                            </td>
                                            <td>Will DeBrandon</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mockup Testing</td>
                                            <td>31 May 2016</td>
                                            <td>
                                                <div class="label label-table label-warning">Pending</div>
                                            </td>
                                            <td>Alexander Flynn</td>
                                            <td class="hidden-xs">
                                                <div class="progress progress-striped progress-sm">
                                                    <div class="progress-bar progress-bar-success" style="width: 75%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--===================================================-->
                                <!--End Hover Rows-->
                            </div>
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