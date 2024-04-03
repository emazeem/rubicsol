<style>
    .pcoded-mtext,.pcoded-mtext-submenu{
        color: black;
    }
</style>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="pcoded-mtext">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('attendance.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-clock"></i>
                        </span>
                        <span class="pcoded-mtext">Attendance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('task.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="bx bx-task"></i>
                        </span>
                        <span class="pcoded-mtext">Tasks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('leave.application.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-question"></i>
                        </span>
                        <span class="pcoded-mtext">Leave Application</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fas fa-clone"></i>
                        </span>
                        <span class="pcoded-mtext">Post</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

