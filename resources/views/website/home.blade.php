@extends('website.layouts.master')
@section('content2')
    @include('components.slider')

    <main id="main">
        <section id="team" class="team section-bg bg-c-primary">
            <div class="container" data-aos="fade-up">
                <div class="section-title ">
                    <h5 class="text-white">OUR PRODUCT</h5>
                    <h2 class="text-white mb-5">RUBIC LIMS</h2>


                    <p class="text-white"><b >RUBIC LIMS</b> is a robust and comprehensive solution designed to streamline laboratory operations, from quotation to report generation. With features such as efficient workflow management, powerful calculation capabilities, and accurate reporting, our <b >RUBIC LIMS</b> enhances productivity, ensures data integrity, and supports compliance with industry standards.</p>



                    <ul style="text-align: left" class="mt-4 ">
                        <li>
                            <b class="text-c-secondary">Streamline Lab Operations:</b> Simplify and automate complex processes, from quotation to report generation, to enhance efficiency and productivity.
                        </li>
                        <li>
                            <b class="text-c-secondary">Ensure Compliance and Quality:</b> Adhere to industry standards, implement robust quality control measures, and maintain data integrity for confident regulatory compliance.
                        </li>
                        <li>
                            <b class="text-c-secondary">Harness Advanced Technology:</b> Experience the power of cutting-edge technology, intuitive user interface, and powerful calculators to drive scientific excellence and stay ahead of the competition.
                        </li>
                    </ul>



                    <p style="text-align: left"><b class="text-c-secondary">RUBICSOL</b> offers a comprehensive and customizable <b class="text-c-secondary">ISO:17025</b> solution, specifically tailored to meet the quality standards essential for calibration labs. Our product is highly recommended, encompassing 100% of the requirements for laboratory operations. Additionally, we are committed to delivering top-notch <b class="text-c-secondary">web and mobile applications</b> for both Android and iOS platforms, ensuring a seamless experience for our users.</p>
                    <p style="text-align: left">Supercharge your lab with our comprehensive <b class="text-c-secondary">RUBIC LIMS</b> and elevate your capabilities to new heights. Discover the transformative impact of streamlined workflows, enhanced compliance, and accurate results. Get in touch with us today to embark on a journey of lab optimization and success!</p>



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
        <section id="about-video" class="about-video bg-c-secondary">
            <div class="container " data-aos="fade-up">

                <div class="row">
                    <div class="col-12 content video-para py-5 mb-5" data-aos="fade-left" data-aos-delay="100">
                        <h1 class="text-center mb-5 text-c-primary">About RUBICSOL</h1>
                    </div>
                    @include('components.screenshots')
                </div>
            </div>
        </section>
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
        </section>
    </main>
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

    @push('scripts')
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
                        success: function(data) {
                            button.attr('disabled', null).html(previous);
                            swal('success',data.success,'success').then((value) => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            button.attr('disabled', null).html(previous);
                            erroralert(xhr);
                        }
                    });
                });
            })
        </script>
    @endpush

@endsection
@section('content')
    <section class="banner-main py-7" id="banner">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-6 p-0" style="background: url('white-cover.jpeg');background-position: center;background-size: cover">
                    <div class="d-flex justify-content-center align-items-end h-100">
                        <div class="text-center w-100" style="background-image: linear-gradient(transparent, rgba(224,224,224,0.81));">
                            <h2 class="text-warning pb-0 mb-0">Our Masterpiece</h2>
                            <img src="{{url('rubic-lims-logo.png')}}" class="pb-4" alt="" width="300">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-8 p-0">
                    <img src="{{url('website/tech.png')}}" style="height: 50vh;object-fit: cover;width: 100%" alt="">
                    <div class="main-banner">
<!--                        <span class="text-color font-weight-bold">George Stewart</span>
                        <h1 class="mb-3 mt-2">
                            The Man in the <br>Glass House
                        </h1>

                        <div class="mb-4">
                            <h4>Price :- <span class="text-color">$14.99</span></h4>
                        </div>
                        <p class="mb-4">We work with our partners to streamline project plans that don’t just deliver on product perfection, but also delivers on time.</p>

                        <a href="#" target="_blank" class="btn btn-main mt-2">
                            Purchase now <i class="ti-angle-right ml-3"></i>
                        </a>-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="section chapter pt-0 mt-0" id="chapter">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <p >OPTIMIZE YOUR LAB</p>
                        <h2 class="text-lg">Explore how a LIMS helps you</h2>
                        <p >Manage your data and work efficiently.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 ">
                    <div class="chapter-inner">
                        <div class="chapter-item">
                            <h4>Sample Management</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Workflow management</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Quality Assurance</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Instrumentation</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Documentation</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Reporting & Certificates</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <img src="{{url('rubic-lims-logo.png')}}" class="pb-4" alt="" width="300">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chapter-inner">
                        <div class="chapter-item">
                            <h4>Quotation & Invoicing</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Lab Execution System</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Inventory Management</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Tests</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Electronic Lab Notebook</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Stability Studies</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section others-book">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="section-heading text-center">
                        <h2 class="text-lg">What is a LIMS?</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-heading ">
                        <p>
                            Laboratory Information Management Systems (LIMS) help with large volume lab data management and adherence to strict standards, while improving efficiency and turnaround times, enabling automation and more. One of the main features that sets Autoscribe's LIMS systems apart is a set of configuration tools designed to efficiently create optimized, highly adaptable workflows. Our core LIMS products are Matrix Gemini and Matrix Express.
                        </p>
                        <p>
                            The flexibility of our Matrix software and its various LIMS modules enable it to be used in a wide variety of laboratories, both in size and application. Read on to discover more about LIMS, how it can help you and which solution is best suited to the needs of your lab.
                        </p>
                        <a href="checkout.html" class="btn btn-border-tp btn-small ml-3">Request Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section others-book">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="section-heading text-center">
                        <img src="screenshots/img_4.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading ">
                        <h2 class="text-lg">Functions of a LIMS</h2>
                        <p>
                            The main purpose of a LIMS is to improve lab efficiency, quality control and accuracy by reducing manual operations. How it does this varies based on the use case, as our software can be configured to suit near-limitless situations and industries. Our advanced LIMS systems will perform a range of core functions that assist your daily work and long term projects, enhancing all areas of laboratory work.
                        </p>
                        <a href="checkout.html" class="btn btn-border-tp btn-small ml-3">Request Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section others-book">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading ">
                        <h2 class="text-lg">Benefits of LIMS</h2>
                        <p>
                            Matrix Gemini LIMS and Matrix Express LIMS can be found in laboratories around the world, spanning sectors from Metals to Pathology and Pharmaceuticals to the Food & Beverage industry. Because our LIMS software has been used in so many different industries and labs, we often already have a LIMS starter configuration that can be quickly adapted for you, using the Matrix Configuration Tools.
                            <br>
                            You don't need to be technical to use Matrix Gemini, or Matrix Express. Our new LIMS systems stand apart from the competition thanks to superior flexibility. No custom coding is required, which means any user can configure Matrix Gemini's workflow, screens, or menus to create their ideal configuration.
                        </p>
                        <a href="checkout.html" class="btn btn-border-tp btn-small ml-3">Request Demo</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading ">

                        <h3>The Top 10 benefits of a LIMS system</h3>

                        <ul class="list-unstyled mt-4 mb-5">
                            <li><i class="ti-check mr-3"></i> Automates repetitive laboratory administration tasks</li>
                            <li><i class="ti-check mr-3"></i> Integrates your lab's instruments and systems intuitively</li>
                            <li><i class="ti-check mr-3"></i> Improves the capacity and profitability of your laboratory</li>
                            <li><i class="ti-check mr-3"></i> Increases reliability by reducing the risk of errors occurring</li>
                            <li><i class="ti-check mr-3"></i> Enables faster, better, informed decisions from real-time reporting</li>
                            <li><i class="ti-check mr-3"></i> Increases efficiency by streamlining process and data management</li>
                            <li><i class="ti-check mr-3"></i> Provides information when and where you need it, locally or in the cloud</li>
                            <li><i class="ti-check mr-3"></i> Allows access to the right information quickly at any stage of any process</li>
                            <li><i class="ti-check mr-3"></i> Ensures all work meets regulatory requirements and current best practice</li>
                            <li><i class="ti-check mr-3"></i> Enhances data integrity with automatic audit logging and revision control</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section blog-home border-top" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading text-center">
                        <h2 class="text-lg mb-3">Our core Matrix LIMS products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="screenshots/img_1.png" alt="" class="img-fluid w-100">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Matrix Gemini</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Improve efficiency, automation and turn-around times in busy laboratories by tracking samples, managing data, whilst reducing errors with a fully featured LIMS.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="screenshots/img_1.png" alt="" class="img-fluid w-100">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Matrix Gemini</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Improve efficiency, automation and turn-around times in busy laboratories by tracking samples, managing data, whilst reducing errors with a fully featured LIMS.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="screenshots/img_1.png" alt="" class="img-fluid w-100">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Matrix Gemini</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Improve efficiency, automation and turn-around times in busy laboratories by tracking samples, managing data, whilst reducing errors with a fully featured LIMS.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="feature-home section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <a >FAQ</a>
                    <h2 class="mb-4">What is a LIMS?</h2>

                    <p>
                        A Laboratory Information Management System (LIMS) allows you to effectively manage the flow of samples and associated data to improve lab efficiency. A LIMS helps standardize workflows, tests and procedures while providing accurate controls of the process. Instruments may be integrated into the LIMS to automate the collection of test data, ensuring they are properly calibrated and operated by trained staff only.
                    </p>
                    <p>
                        The audit and revision control functions in a LIMS are key reasons why people use a LIMS and ‘go paperless’. Unlike a spreadsheet changes to results are logged, as well as any changes to the test procedure, instruments and reagents used and so on.
                    </p>

                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mt-5 mt-lg-0">
                        <img src="screenshots/img_15.png" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="feature-home section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <a >FAQ</a>
                    <h2 class="mb-4">What is a typical LIMS workflow?</h2>




                    <p>
                        Autoscribe LIMS is a comprehensive solution that integrates all of these steps and more into an efficient, intuitive system.
                    </p>
                    <p>
                        At their heart, all labs have a similar process. Samples move through a typical laboratory as shown here:
                    </p>

                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mt-5 mt-lg-0">
                        <img src="screenshots/img_15.png" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="setcion" id="book">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none">
                    <div class="book-preview">
                        <img src="{{url('website/images/about/kindle.png')}}" class="background-device img-fluid" alt="">
                        <div class="owl-book owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1920px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-640px, 0px, 0px);">
                                    <div class="owl-item" style="width: 320px;">
                                        <div class="item">
                                            <img src="{{url('website/images/about/book_page.png')}}" alt="" class="img-fluid">
                                            <div class="overlay">
                                                <a href="{{url('website/images/about/book_page.png')}}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 320px;">
                                        <div class="item">
                                            <img src="{{url('website/images/about/book_page2.png')}}" alt="" class="img-fluid">
                                            <div class="overlay">
                                                <a href="{{url('website/images/about/book_page2.png')}}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item" style="width: 320px;">
                                        <div class="item">
                                            <img src="{{url('website/images/about/book_page.png')}}" alt="" class="img-fluid">
                                            <div class="overlay">
                                                <a href="{{url('website/images/about/book_page.png')}}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="section-heading book-info mt-5 mt-lg-0">
                        <h2 class="text-lg text-center">RUBIC LIMS</h2>
                        <h5 class=" mb-4 text-center">Elevating Lab Information Management</h5>
                        <p >
                            Meet RUBIC LIMS, the state-of-the-art lab information management system that transforms laboratory operations and collaborations. Our intuitive platform makes it easy to manage the resources, workflows, and data in your lab from a single, central location.
                        </p>
                        <ul class="list-unstyled mt-4 mb-5">
                            <li><i class="ti-check mr-3"></i>
                                User-Friendly Interface<br>
                                <p class="font-weight-normal">The user-friendly, contemporary interface of Rubic Lims makes information management in your lab easier. Our system is made to be simple to use, so you and your team can concentrate on what really matters—pursuing ground-breaking research and fostering creativity.</p>
                            </li>
                            <li><i class="ti-check mr-3"></i> Robust Features<br>
                                <p class="font-weight-normal">
                                    A feature-rich feature set designed to satisfy the varied requirements of laboratories in a range of sectors is provided by Rubic Lims. Modules for sample management, inventory monitoring, electronic lab notebooks, report production, and other functions are included in our system.

                                </p>
                            </li>
                            <li><i class="ti-check mr-3"></i> Safe and Dedicated<br>
                                <p class="font-weight-normal">
                                    At Rubic Lims, we recognize the significance of regulatory compliance and data security in the laboratory. Strong security features on our platform include frequent backups, access limitations, and data encryption. Rubic Lims also follows industry-standard compliance guidelines, guaranteeing that the data in your lab is safe and compliant with legal requirements.

                                </p>
                            </li>
                            <li><i class="ti-check mr-3"></i> Exceptional Support<br>
                                <p class="font-weight-normal">
                                    We take great satisfaction in offering our customers excellent customer service. If you have any questions or concerns, our committed team of specialists is here to help. We're here to help you get the most out of Rubic Lims, whether you need help with setup, training, or troubleshooting.

                                </p>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-main-2">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about section" id="author">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-img">
                        <img src="website/mission.png" alt="" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="author-info mt-5 mt-lg-0">
                        <h2 class="text-lg">Our Goal</h2>
                        <p class="mb-4 lead"></p>
                        <p>
                            Our goal at RUBIC LIMS is to enable labs all around the world by offering an intuitive, cutting-edge, and feature-rich lab information management system. Our mission is motivated by the conviction that every laboratory, regardless of size or area of expertise, should have access to a dependable, effective, and user-friendly platform that improves overall performance and streamlines operations.
                        </p>
                        <p>
                            Our main objective is to streamline and improve the data, workflow, and resource management processes used by laboratories. By doing this, we hope to free up our clients to concentrate on what really matters: carrying out ground-breaking research, producing precise outcomes, and advancing societal progress.
                        </p>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <p >
                        In conclusion, the goal of Rubic Lims is to transform laboratory administration by offering a modern, user- friendly solution that enables labs to prosper in the cutthroat environment of contemporary research. With the help of our intuitive platform, you can concentrate on what you do best—improving lives and expanding scientific knowledge—while we handle the rest.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-4 section-bottom" id="service">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-sm-6">
                    <div class="service-block mb-4 mb-lg-0">
                        <div class="container">
                            <h4 class="mb-3 mt-4">About us</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-left">
                                        RUBIC LIMS stands out as an exceptional lab information management system that provides comprehensive ISO 17025 compliance for calibration services. This global standard for testing and calibration laboratories ensures that your laboratory maintains the highest levels of accuracy, reliability, and quality in its operations. By adopting Rubic Lims, you can rest assured that your laboratory's equipment and instruments are consistently performing at optimal levels, leading to more reliable data and improved research outcomes.
                                    </p>
                                    <p class="text-left">
                                        The integration of ISO 17025 services within Rubic Lims offers numerous advantages for your laboratory. Firstly, it enables you to manage and monitor calibration processes efficiently. With Rubic Lims, you can effortlessly track calibration schedules, store calibration records, and generate reports that demonstrate your compliance with the ISO 17025 requirements. This not only streamlines your operations but also ensures that your laboratory remains in full compliance with the standard, fostering a culture of continuous improvement and excellence.
                                    </p>
                                    <p class="text-left">
                                        Making the strategic choice to go with RUBIC LIMS for your laboratory's information management needs not only streamlines daily operations but also guarantees optimal quality and dependability. While the extra lab management capabilities provided by Rubic Lims further improve your laboratory's performance and reputation within the industry, the system's ISO 17025 compliance offers a strong platform for your laboratory to flourish in its research pursuits.
                                    </p>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <img src="website/iso17025.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-bottom testimonial" id="review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="mb-3 text-lg">What people are saying</h2>
                        <p>Remarks made by our respectable clients</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12 col-md-12 testimonial-wrap">
                    <div class="test-item">
                        <div class="testimonial-item-content">
                            <div class="test-author-thumb mb-4">
                                <img src="https://aimscal.com/public/images/CEO.jpeg" alt="Testimonial author" class="img-fluid" style="object-fit: cover">

                                <div class="test-author-info mt-4">
                                    <div class="rating">
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                    </div>

                                    <h4 class="mb-0 mt-2">Imtiaz Ahmed</h4>
                                    <p>CEO Al-Meezan Industrial Metrology Services</p>
                                </div>
                            </div>

                            <p class="mb-0">Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section cta-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <blockquote class="blockquote">
                            <h2 class="text-lg">"It's simply the best guide to making money online ever released which only a fool would ignore."</h2>
                            <footer class="blockquote-footer h5 text-color mt-4">John Smith </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section contact bg-grey" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="mb-2 text-lg">Contact Us</h2>
                        <p>Whether you have questions or you would just like to say hello, contact us.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, atque!</p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <i class="ti-headphone-alt"></i>
                        <p class="mb-0">Contact Quickly</p>
                        <h5>+23-68017684</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <i class="ti-email"></i>
                        <p class="mb-0">Email</p>
                        <h5>startor@support.com</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <i class="ti-location-pin"></i>
                        <p class="mb-0">Location</p>
                        <h5>397 Lake forest drive street USA</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
