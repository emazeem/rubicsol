@extends('website.layouts.master')
@section('content')
    @include('components.slider')

    <main id="main">
        <section id="about-video" class="about-video bg-c-primary">
            <div class="container " data-aos="fade-up">

                <div class="row">
                    <div class="col-12 content video-para py-5 mb-5" data-aos="fade-left" data-aos-delay="100">
                        <h1 class="text-center mb-5 text-c-secondary">About RUBICSOL</h1>
                        <h5>Unlock the Potential of Your Lab with Our <b class="text-c-secondary">RUBIC LIMS!</b></h5>
                        <p><b class="text-c-secondary">RUBICSOL</b> offers a comprehensive and customizable <b class="text-c-secondary">ISO:17025</b> solution, specifically tailored to meet the quality standards essential for calibration labs. Our product is highly recommended, encompassing 100% of the requirements for laboratory operations. Additionally, we are committed to delivering top-notch <b class="text-c-secondary">web and mobile applications</b> for both Android and iOS platforms, ensuring a seamless experience for our users.</p>
                        <p>Supercharge your lab with our comprehensive <b class="text-c-secondary">RUBIC LIMS</b> and elevate your capabilities to new heights. Discover the transformative impact of streamlined workflows, enhanced compliance, and accurate results. Get in touch with us today to embark on a journey of lab optimization and success!</p>
                    </div>


                    @include('components.screenshots')
                </div>
            </div>
        </section>


        <section id="team" class="team section-bg bg-c-secondary">
            <div class="container" data-aos="fade-up">
                <div class="section-title ">
                    <h2>RUBIC LIMS</h2>
                    <p class="text-c-primary"><b >RUBIC LIMS</b> is a robust and comprehensive solution designed to streamline laboratory operations, from quotation to report generation. With features such as efficient workflow management, powerful calculation capabilities, and accurate reporting, our <b >RUBIC LIMS</b> enhances productivity, ensures data integrity, and supports compliance with industry standards.</p>
                    <ul style="text-align: left" class="mt-4">
                        <li>
                            <b>Streamline Lab Operations:</b> Simplify and automate complex processes, from quotation to report generation, to enhance efficiency and productivity.
                        </li>
                        <li>
                            <b>Ensure Compliance and Quality:</b> Adhere to industry standards, implement robust quality control measures, and maintain data integrity for confident regulatory compliance.
                        </li>
                        <li>
                            <b>Harness Advanced Technology:</b> Experience the power of cutting-edge technology, intuitive user interface, and powerful calculators to drive scientific excellence and stay ahead of the competition.
                        </li>
                    </ul>

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
                                <h5>{{$feature['heading']}}</h5>
                                <p>{{$feature['p']}}</p>
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

        <section class="bg-c-primary">
            <div class="container">
                <center>
                    <embed src="{{url('RUBIC LIMS Brochure.pdf')}}" type="application/pdf" width="100%" height="890px">
                    <p>Unable to display PDF file. <a href="{{url('RUBIC LIMS Brochure.pdf')}}" class="text-c-secondary">Download</a> instead.</p>
                    </embed>
                </center>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact bg-c-secondary">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact US</h2>
                </div>
                <div>
                    <iframe style="border:0; width: 100%; height: 370px;" frameborder="0" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702.3208857802576!2d74.24100956623843!3d31.423994492464132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901ebe6650cb1%3A0xd941e8ab1176707!2sAIMS%20-%20Al%20Meezan%20Industrial%20Metrology%20Services!5e0!3m2!1sen!2sbg!4v1652694855722!5m2!1sen!2sbg" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info p-4">
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
                                <p>info@rubicsol.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+923040647306</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0 ">
                        <form id="php-email-form" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <p>We are here to answer any inquiries you have about RUBIC LIMS. Even if there is something you wanted to see in RUBIC LIMS, do let us know, we’ll reach out to you as soon as we can.</p>
                                </div>
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
