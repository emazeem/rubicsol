<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="col-12 text-center mb-5 border-bottom pb-5">
            <img src="{{url('RUBICSOL white.png')}}"  alt="" width="100">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 footer-contact">
                    <p class="">
                        58-B Block , OPF society, Riwind Rd, Lahore
                        <br>
                        <strong>Phone:</strong> +9230001235321, +923040647306<br>
                        <strong>Email:</strong> info@aimscal.com, info@rubicsol.com<br>
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('w.home')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('w.about.us')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('w.documentation')}}">Documentation</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Get connected with us by listening our latest updates.</p>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input type="email" name="email" required>
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span> <a href="{{url('')}}" class="text-c-secondary">rubicsol.com</a> </span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="" class="facebook"><i class="bx bxl-whatsapp"></i></a>
            <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            {{--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
        </div>
    </div>
</footer><!-- End Footer -->
