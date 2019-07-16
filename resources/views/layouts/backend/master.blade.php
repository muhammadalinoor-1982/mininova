<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.backend._head')
</head>

<body class="skin-dark">

<div class="main-wrapper">


    <!-- Header Section Start -->
    <div class="header-section">
        @include('layouts.backend._header')
    </div>
    <!-- Header Section End -->
    <!-- Side Header Start -->
    <div class="side-header show">
       @include('layouts.backend._mainNave')
    </div>
    <!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">
        @include('layouts.backend._messages')
        @yield('content-body')
        </div>
    <!-- Content Body End -->

    <!-- Footer Section Start -->
    <div class="footer-section">
        @include('layouts.backend._footer')
    </div><!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
@include('layouts.backend._scripts')

</body>

</html>