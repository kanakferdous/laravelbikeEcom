<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('frontend.includes.header')
        @include('frontend.includes.css')
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
            @include('frontend.includes.navbar')
            @include('frontend.includes.slider')
            @yield('body')
            @include('frontend.includes.footer')
            @include('frontend.includes.modal')
        </div>
		@include('frontend.includes.js')
    </body>
</html>
