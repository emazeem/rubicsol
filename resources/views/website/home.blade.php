@extends('website.layouts.master')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url('img/lab_cover.jpg');background-size: contain">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="text-light">Streamline Your Lab Operations with Our Cutting-Edge LIMS Solution!</h1>
                    <h6 class="text-light">Experience the power of our innovative Laboratory Information Management System (LIMS). Automate sample tracking, optimize workflows, ensure data integrity, and enhance overall lab efficiency. Unlock the potential of your lab with our comprehensive LIMS designed for seamless integration and superior performance.</h6>
                </div>
            </div>
            <div class="text-center">
                <a href="#contact" class="btn-get-started scrollto">Contact us</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Video Section ======= -->
        <section id="about-video" class="about-video">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-12 content video-para" data-aos="fade-left" data-aos-delay="100">
                        <h5>Unlock the Potential of Your Lab with Our LIMS Solution!</h5>
                        <ul>
                            <li>
                                🔬 Streamline Lab Operations: Simplify and automate complex processes, from quotation to report generation, to enhance efficiency and productivity.
                            </li>
                            <li>
                                🔐 Ensure Compliance and Quality: Adhere to industry standards, implement robust quality control measures, and maintain data integrity for confident regulatory compliance.
                            </li>
                            <li>
                                💡 Harness Advanced Technology: Experience the power of cutting-edge technology, intuitive user interface, and powerful calculators to drive scientific excellence and stay ahead of the competition.
                            </li>
                        </ul>
                        Supercharge your lab with our comprehensive LIMS and elevate your capabilities to new heights. Discover the transformative impact of streamlined workflows, enhanced compliance, and accurate results. Get in touch with us today to embark on a journey of lab optimization and success!
                    </div>

                </div>

            </div>
        </section><!-- End About Video Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>LIMS Features</h2>
                    <p>
                        Our LIMS is a robust and comprehensive solution designed to streamline laboratory operations, from quotation to report generation. With features such as efficient workflow management, powerful calculation capabilities, and accurate reporting, our LIMS enhances productivity, ensures data integrity, and supports compliance with industry standards.
                    </p>
                </div>

                <div class="row">
                    <?php
                        $features[]=[
                            'heading'=>'Quotation Management',
                            'p'=>'Streamline your quotation process, from RFQ to customer approval, ensuring accurate pricing and efficient communication.',
                            'url'=>'quote_thumbnail.jpg'
                        ];
                        $features[]=[
                            'heading'=>'Order Management',
                            'p'=>'Effectively manage lab and site jobs, assigning tasks, tracking progress, and ensuring timely completion and delivery.',
                            'url'=>'job_thumbnail.jpg'
                        ];
                        $features[]=[
                            'heading'=>'Calibration Calculator',
                            'p'=>'Perform complex calculations based on input values and procedures, generating accurate reports and certificates for calibration results.',
                            'url'=>'calc_thumbnail.jpg'
                        ];
                        $features[]=[
                            'heading'=>'Reference Data Management',
                            'p'=>'Maintain a comprehensive database of lab equipment, parameters, units, procedures, and uncertainties for standardized and efficient calibration processes.',
                            'url'=>'data_thumbnail.jpg'
                        ];
                        $features[]=[
                            'heading'=>'Quality Assurance and Compliance',
                            'p'=>'Ensure adherence to ISO:17025 standards, implement quality control measures, and conduct internal audits for continuous improvement and regulatory compliance.',
                            'url'=>'quality_thumbnail.jpg'
                        ];
                        $features[]=[
                            'heading'=>'Report Generation',
                            'p'=>'Generate comprehensive reports, such as calibration certificates, worksheets, uncertainty budgets, and trend analysis, providing detailed documentation of calibration results and facilitating traceability and compliance with regulatory requirements.',
                            'url'=>'cert_thumbnail.jpg'
                        ];



                    ?>
                    @foreach($features as $feature)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src='{{url('img/'.$feature['url'])}}' class='img-fluid' >
                            </div>
                            <div class="member-info">
                                <h4>{{$feature['heading']}}</h4>
                                <span>{{$feature['p']}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        <div class="text-center">
                            <a href="{{route('w.documentation')}}" class="btn-get-started">Show all</a>
                        </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <center>
            <embed src="{{url('LIMS Brochure.pdf')}}" type="application/pdf" width="80%" height="920px">
            <p>Unable to display PDF file. <a href="{{url('LIMS Brochure.pdf')}}">Download</a> instead.</p>
            </embed>
        </center>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>
                    </p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                            frameborder="0" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702.3208857802576!2d74.24100956623843!3d31.423994492464132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901ebe6650cb1%3A0xd941e8ab1176707!2sAIMS%20-%20Al%20Meezan%20Industrial%20Metrology%20Services!5e0!3m2!1sen!2sbg!4v1652694855722!5m2!1sen!2sbg" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>
                                    58-B Block , OPF society, Riwind Rd, Lahore
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@aimscal.com, emazeem07@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+9230001235321, +923040647306</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form id="php-email-form" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 form-group ">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="send-message">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <script src="{{url('js/custom.js')}}"></script>
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/sweetalert.min.js')}}"></script>

    <script>
        $(function () {
            $('#php-email-form').on('submit',function (e) {
                e.preventDefault();
                var button = $('#send-message');
                var previous = $(button).html();

                button.attr('disabled', 'disabled').html('Processing... Please wait <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

                $.ajax({
                    url: "{{route('w.contact.us.send.email')}}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data)
                    {
                        button.attr('disabled', null).html(previous);
                        swal('success',data.success,'success').then((value) => {});
                    },
                    error: function(xhr)
                    {
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);

                    }
                });
            });
        })
    </script>
@endsection
