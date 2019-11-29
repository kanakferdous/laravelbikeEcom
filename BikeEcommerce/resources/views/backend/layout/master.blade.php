<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.includes.header')
        @include('backend.includes.css')
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            @include('backend.includes.navbar')
            <div class="boxed">
                @yield('body')
                @include('backend.includes.mainnavbar')
                @include('backend.includes.sidebar')
            </div>
            @include('backend.includes.footer')
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        @include('backend.includes.js')
    </body>
</html>