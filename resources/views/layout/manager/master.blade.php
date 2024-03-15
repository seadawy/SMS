<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @extends('layout.head')
    <title>@yield('title')</title>
    @yield('moreCss')
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    {{-- navbar --}}
    @include('layout.navbar')
    {{-- slide menu --}}
    @include('layout.manager.slide')
    {{-- page content --}}
    <div class="page-wrapper">
        @yield('content')
        @include('layout.footer')
    </div>
</div>
@include('layout.script')
@yield('moreJs')
</body>

</html>
