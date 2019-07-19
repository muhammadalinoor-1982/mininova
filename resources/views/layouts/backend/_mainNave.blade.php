<button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
<!-- Side Header Inner Start -->
<div class="side-header-inner custom-scroll">

    <nav class="side-header-menu" id="side-header-menu">
        <ul>
            <li class="has-sub-menu"><a href="#"><i class="zmdi zmdi-accounts-add zmdi-hc-fw"></i> <span>Registration</span></a>
                <ul class="side-header-sub-menu">
                    <li><a href="{{route('doctor.index')}}"><i class="zmdi zmdi-account-box zmdi-hc-fw"></i><span>Doctors</span></a></li>
                    <li><a href="{{route('registration.index')}}"><i class="zmdi zmdi-accounts-add zmdi-hc-fw"></i><span>Staff</span></a></li>
                </ul>
            </li>

            <li class="has-sub-menu"><a href="#"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i> <span>Account</span></a>
                <ul class="side-header-sub-menu">
                    <li><a href="{{route('admin.addsignin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i><span>Signin</span></a></li>
                    <li><a href="{{route('admin.addforgotpassword')}}"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span>Forgot Password</span></a></li>
                </ul>
            </li>

            <li class="has-sub-menu"><a href="#"><i class="fa fa-forumbee" aria-hidden="true"></i> <span>Prescription Materials</span></a>
                <ul class="side-header-sub-menu">
                    <li><a href="{{route('source.index')}}"><i class="fa fa-th" aria-hidden="true"></i><span>Source</span></a></li>
                </ul>
            </li>

        </ul>
    </nav>

</div><!-- Side Header Inner End -->