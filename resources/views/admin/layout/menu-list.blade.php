<style>
    .pcoded-mtext,.pcoded-mtext-submenu{
        color: black;
    }
</style>
<nav class="pcoded-navbar menupos-fixed menu-light">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            <ul class="nav pcoded-inner-navbar" id="matchKey">
                <li class="nav-item pcoded-menu-caption">
                    <label class="text-capitalize">Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{url('dashboard')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('email.marketing')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-mail-bulk"></i>
                        </span>
                        <span class="pcoded-mtext">Email Marketing</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
