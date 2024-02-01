<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo py-0 my-0">
            <a href="{{route('w.home')}}"><img src="RUBICSOL.png" alt="" class="img-fluid"> </a>
        </h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link  active" href="{{route('w.home')}}">Home</a></li>
                <li><a class="nav-link " href="{{route('w.documentation')}}">Documentation</a></li>
                <li><a class="nav-link " href="{{route('w.pricing')}}">Pricing</a></li>
                <li><a class="nav-link " href="{{route('w.contact.us')}}">Contact</a></li>
                <li><a class="nav-link " href="{{route('w.about.us')}}">About</a></li>
                @if(Auth::user())
                    <li><a class="nav-link getstarted bg-c-secondary" href="{{url('dashboard')}}">Dashboard</a></li>
                    @else
                    <li><a class="nav-link getstarted bg-c-secondary" href="{{url('login')}}">Login</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<div class="custom-model-main">
    <div class="custom-model-inner">
        <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
                <div class="close-btn">×</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="url">Please paste URL provided by AIMS to generate request : </label>
                            <label class="text-danger">URL provided by AIMS is valid for only 45 minutes.</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>
                        <a class="nav-link" style="float: right;cursor: pointer">Verify link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-overlay"></div>
</div>
<style>
    .Click-here {
        cursor: pointer;
        transition:background-image 3s ease-in-out;
    }
    .custom-model-main {
        text-align: center;
        overflow: hidden;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0; /* z-index: 1050; */
        -webkit-overflow-scrolling: touch;
        outline: 0;
        opacity: 0;
        -webkit-transition: opacity 0.15s linear, z-index 0.15;
        -o-transition: opacity 0.15s linear, z-index 0.15;
        transition: opacity 0.15s linear, z-index 0.15;
        z-index: -1;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .model-open {
        z-index: 99999;
        opacity: 1;
        overflow: hidden;
    }
    .custom-model-inner {
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        transform: translate(0, -25%);
        -webkit-transition: -webkit-transform 0.3s ease-out;
        -o-transition: -o-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        display: inline-block;
        vertical-align: middle;
        width: 600px;
        margin: 30px auto;
        max-width: 97%;
    }
    .custom-model-wrap {
        display: block;
        width: 100%;
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        background-clip: padding-box;
        outline: 0;
        text-align: left;
        padding: 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        max-height: calc(100vh - 70px);
        overflow-y: auto;
    }
    .model-open .custom-model-inner {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate(0, 0);
        position: relative;
        z-index: 999;
    }
    .model-open .bg-overlay {
        background: rgba(0, 0, 0, 0.6);
        z-index: 99;
    }
    .bg-overlay {
        background: rgba(0, 0, 0, 0);
        height: 100vh;
        width: 100%;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-transition: background 0.15s linear;
        -o-transition: background 0.15s linear;
        transition: background 0.15s linear;
    }
    .close-btn {
        position: absolute;
        right: 10px;
        top: -10px;
        cursor: pointer;
        z-index: 99;
        font-size: 30px;
        color: black;
    }

    @media screen and (min-width:800px){
        .custom-model-main:before {
            content: "";
            display: inline-block;
            height: auto;
            vertical-align: middle;
            margin-right: -0px;
            height: 100%;
        }
    }
    @media screen and (max-width:799px){
        .custom-model-inner{margin-top: 45px;}
    }

</style>
<script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<script>
    $(".Click-here").on('click', function() {
        $(".custom-model-main").addClass('model-open');
    });
    $(".close-btn, .bg-overlay").click(function(){
        $(".custom-model-main").removeClass('model-open');
    });
</script>
