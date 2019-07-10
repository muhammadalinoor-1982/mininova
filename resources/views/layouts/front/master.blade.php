<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front._head')
</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        @include('layouts.front._header')
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    @include('layouts.front._mainNave')
    <!-- offsidebar-->
    @include('layouts.front._rightNave')
    <!-- Main section-->
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            @yield('content-wrapper')
        </div>
    </section><!-- Page footer-->
    @include('layouts.front._footer')
</div><!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
@include('layouts.front._script')
</body>

</html>