<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
    <div class="m-header bg-c-blue">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <h2 data-text="RUBICSOL" class="b-brand mt-2 font-weight-bold text-white" style="letter-spacing: 8px" >RUBICSOL</h2>

        <style>
            #lims-h1{
                display: none;
                margin-top: 5px;
                position: relative;
                font-size: 40px;
                color: white;
                -webkit-text-stroke: 0.1vw white;
                letter-spacing: 10px;
                text-transform: uppercase;
            }
            #lims-h1::before{
                content: attr(data-text);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                color: #298dd5;
                -webkit-text-stroke: 0vw #383d52;
                border-right: 0px solid #298dd5;
                overflow: hidden;

            }
            @keyframes animate{
                0%,10%,100%{
                    width: 0;
                }
                70%,90%{
                    width: 100%;
                }
            }
        </style>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav ml-auto">
            @if(auth()->user()->id==19)
                <li>
                    <div class="dropdown">
                        <a href="{{url('optimize')}}"><i class="icon feather icon-refresh-cw"></i></a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="{{url('code')}}"><i class="fa fa-code"></i></a>
                    </div>
                </li>
            @endif

            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i><span class="badge bg-danger"><span class="sr-only"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">  Notifications</h6>
                            <div class="float-right">
                                <a href="#!" class="m-r-10">mark as read</a>
                                <a href="#!">clear all</a>
                            </div>
                        </div>
                        <ul class="noti-body notification-body">

                        </ul>
                        <div class="noti-footer">
                            <a href="{{url('/notifications')}}">show all</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user ">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('profile.png')}}" class="img-radius wid-40  hei-40" style="object-fit: cover">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification ">
                        <div class="pro-head">
                            <img src="profile.png" class="img-radius wid-40 hei-40" style="object-fit: cover">
                            <span>{{auth()->user()->name}}</span>
                            <a class="dud-logout" title="Logout"
                               onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                               href="{{route('logout')}}">
                                <i class="feather icon-log-out"></i>
                            </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </div>
                        <ul class="pro-body">
                            <li><a href="{{url('/profile')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="{{url('/notifications')}}" class="dropdown-item"><i class="feather icon-bell"></i> Notifications</a></li>
                            <li><a href="{{url('/change_password')}}" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                            <li>
                                <a class="dropdown-item" title="Logout"
                                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                                   href="{{route('logout')}}">
                                    <i class="feather icon-log-out"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
