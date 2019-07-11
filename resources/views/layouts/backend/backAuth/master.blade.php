<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.backend.backAuth._head')
</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    @yield('d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12')
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    @include('layouts.backend.backAuth._banner')
                </div>

            </div>
        </div>

    </div>
    <!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
@include('layouts.backend.backAuth._scripts')

</body>

</html>