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
                                    <img src='{{url('img'.$feature['url'])}}' class='img-fluid' >
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
    <section class="banner-main pt-5 pb-3" id="banner">
        <div class="container-fluid pt-5">
            <div class="row justify-content-between">
                <div class="col-lg-6 d-md-block d-none p-0" style="background: url('white-cover.jpeg');background-position: top;background-size: cover">
                    <div class="d-flex justify-content-center align-items-end h-100">
                        <div class="text-center w-100" style="background-image: linear-gradient(transparent, rgba(224,224,224,0.81));">
                            <h2 class="text-warning pb-0 mb-0">Our Masterpiece</h2>
                            <h2 class=" pb-5 mb-2">RUBIC LIMS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-0">
                    <img src="{{url('website/tech.png')}}" style="height: 50vh;object-fit: cover;width: 100%" alt="">
                    <div class="main-banner">

                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="section blog-home" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-heading mb-4 text-center">
                        <h2 class="text-lg mt-5 d-none">RUBIC LIMS</h2>
                        <div class="row  mt-5 justify-content-center">
                            <div class="col-md-3 d-none">
                                <img src="{{url('rubic-lims-logo.png')}}" class="" alt="">
                            </div>
                            <div class="col-md-9">
                                <img src="{{url('rubic-lims-logo.png')}}" class="pb-2" style="width: 300px" alt="">

                                <h2 class="text-lg d-none">RUBIC LIMS</h2>

                                <h6>Meet RUBIC LIMS, the state-of-the-art lab information management system that transforms laboratory operations and collaborations. Our intuitive platform makes it easy to manage the resources, workflows, and data in your lab from a single, central location.</h6>

                            </div>
                        </div>

                        <h3 class="mt-5">RUBIC LIMS Modules</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/module1.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Sample Management</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Sample management is essential for maintaining the highest standards and guaranteeing accurate results in the field of research and quality control.By managing samples in RUBIC LIMS efficiently over the course of their lifespan.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/imgten.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Quotation and Customer management</a></h4>
                            <div class="blog-meta mb-2">
                                <span>For RUBIC LIMS, a Lab Information and administration Systems (LIMS) provider, efficient quotation and customer administration are vital for optimising business processes, elevating client satisfaction, and promoting growth.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/module3.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Order Management and Invoicing</a></h4>
                            <div class="blog-meta mb-2">
                                <span>The sophisticated, user-friendly RUBIC LIMS (Laboratory Information Management System) platform is made to maximise all aspects of laboratory operations, including order processing and billing.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/module4.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Scheduling and Data Entry: A unique Approach</a></h4>
                            <div class="blog-meta mb-2">
                                <span>To maintain optimal processes and deliver correct results in the fast-paced world of laboratories, efficient scheduling and data input are essential. Innovative and state-of-the-art platform.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/modulefive.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Master Data Management</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Particularly in the framework of RUBIC LIMS, master data management (MDM) becomes apparent as an essential technique in the ever-changing field of data management for preserving data accuracy.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <img src="images/modulesix.jpg" alt="" class="img-fluid w-100 module-image">
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Documentation Control and Record</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Any laboratory or research institution must have documentation control and record management in place to guarantee the precision, consistency, and traceability of data and procedures.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section others-book">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-lg-3">
                    <div class="section-heading text-center ">
                        <h2 class="text-lg">What is a LIMS?</h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="section-heading ">
                        <p>
                            Laboratory Information Management System (LIMS) is a technology used to streamline and maximize the efficiency of daily operations of laboratories. It functions as a centralized digital platform that facilitates the administration of important activities like test scheduling, sample monitoring, and result analysis. By promoting teamwork and upholding high standards of quality, LIMS makes sure that laboratory workflows are well-organized.
                        </p>
                        <p>
                            Additionally, it makes data sharing and analysis more effective, which can promote quicker and better decision-making in the laboratory setting. Labs can greatly increase their output and general performance by using LIMS, making it an essential tool in the modern scientific world. Read further to learn more about LIMS, how it can assist you, and which option best fits your lab's needs.
                        </p>


                        <h2 >Core functions of a LIMS</h2>

                        <p>
                            The main objective of LIMS is to enhance lab productivity, accuracy, and quality control by decreasing manual labor. Our software can be tailored to almost any industry and situation, so how it accomplishes this depends on the use case.
                        </p>
                        <p>
                            Our modern LIMS systems, the RUBIC LIMS, can carry out a number of fundamental tasks to support your ongoing projects and daily work, improving every aspect of laboratory work.
                        </p>


                        <a href="checkout.html" class="btn btn-border-tp btn-small ml-3">Request Demo</a>
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
                        <p >GROW YOUR LAB</p>
                        <h2 class="text-lg">Discover how RUBIC LIMS assists you</h2>
                        <p >Manage your data and work productively.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 ">
                    <div class="chapter-inner">
                        <div class="chapter-item">
                            <h4>Customers Management</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Sample management</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Order Management</h4>
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
                        <div class="chapter-item">
                            <h4>Document Control</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Accounts & Finance</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>HR Management</h4>
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
                            <h4>Tests / Certificates</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Worksheets / Datasheet</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Quality Assurance</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Lab Environment Data</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Technician Authorization</h4>
                        </div>
                        <div class="chapter-item">
                            <h4>Purchase Management</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section others-book">
        <div class="container-fluid ">
            <div class="row justify-content-center mt-5 pt-4">
                <div class="col-lg-6">
                    <div class="section-heading ">
                        <h2 class="text-lg">The Pros of using RUBIC LIMS</h2>
                        <p>
                            RUBIC LIMS is used in laboratories related to a variety of sectors including pharmaceuticals, food and beverage, biochemistry etc. Our LIMS initial configuration can be rapidly modified for you to adapt to your lab's specific needs and requirements.
                        </p>
                        <p>
                            Utilizing RUBIC LIMS does not require technological expertise. Superior adaptability sets our new LIMS systems apart from the competitors. Any user can customize RUBIC LIMS's workflow, displays, or menus to build their perfect setup because no custom coding is needed.
                        </p>
                        <a href="checkout.html" class="btn btn-border-tp btn-small ml-3">Request Demo</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading ">

                        <h3>What RUBIC LIMS offers?</h3>

                        <ul class="list-unstyled mt-4 mb-5">

                            <li><i class="ti-check mr-3 text-warning"></i>Streamlines repetitive laboratory administration tasks.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Effortlessly incorporates the systems and equipment in your lab.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Keeps systemic compliance with ISO 17025.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Increases your laboratory's capacity and profitability.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Reduces the possibility of errors happening.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Enables real-time reporting to make its quicker and smarter.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Boosts efficiency by optimizing data management and workflow.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Gives information locally or on the cloud, when required.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Enables rapid access to the appropriate information at any point.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Verifies that every work complies with legal standards.</li>
                            <li><i class="ti-check mr-3 text-warning"></i>Improves data integrity through automatic revision control.</li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Key Features-->
    <section class="section blog-home" id="blog">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading text-center">
                        <h2 class="text-lg mb-3">Key Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <div class="text-center pt-3">
                    <img src="images/adaptive.png" alt="" class="img-fluid feature-image">
                       </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Adaptable Software Platform</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Rubic LIMS Laboratory Information Management System is distinguished by its flexible software platform. Because of its special ability to customise the system to meet individual laboratory requirements.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/saving.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Save Time and Money</a></h4>
                            <div class="blog-meta mb-2">
                                <span>With highly adaptable and efficient Laboratory Information Management System, Rubic LIMS, laboratories can save money and time. Users may optimise their operations and cut expenses using Rubic LIMS's effective management.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <div class="text-center pt-3">
                    <img src="images/global-marketing.png" alt="" class="img-fluid feature-image">
                     </div>
                    <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Global OutReach</a></h4>
                            <div class="blog-meta mb-2">
                            <span>Rubic LIMS, a complete solution provides its users with worldwide support. No matter where they are located or what industry they work in, laboratories can depend on Rubic LIMS for their operations thanks to this comprehensive support network.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/customer-satisfaction.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Dedicated Industry Expertise</a></h4>
                            <div class="blog-meta mb-2">
                                <span>The distinctive fusion of advanced technology and industry expertise distinguishes Rubic LIMS from its rivals.The team of professionals at Rubic LIMS is one of the main things that sets it apart from the competition.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2nd row-->
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/teamwork (1).png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Collaborative Workforce</a></h4>
                            <div class="blog-meta mb-2">
                                <span>By providing a collaborative work environment that encourages easy communication, teamwork, and productivity among laboratory workers, Rubic LIMS distinguishes out in the industry it shines out in part because of its intuitive user interface. </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/task.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Regulatory Compliance</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Rubic LIMS distinguishes itself from other providers by offering regulatory compliance for laboratories in a variety of industries. Because of its innovative compliance strategy, which combines reliable features, frequent updates, and an intuitive user interface.</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/support.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Exceptional Support</a></h4>
                            <div class="blog-meta mb-2">
                                <span>We take great satisfaction in offering our customers excellent customer service. If you have any questions or concerns, our committed team of specialists is here to help. We're here to help you get the most out of Rubic Lims, whether you need help with setup, training, or troubleshooting.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/datasecurity.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Data Security</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Strong data security is our top priority via regular backups, access limits, and encryption.We use the best cybersecurity techniques to protect your private lab data. RUBIC LIMS offers trustworthy data protection to make you stress free and secured.</span>
                            </div>
                        </div>
                    </div>
                </div>
           <!--3rd row-->
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/robustreporting.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Robust reporting</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Strong reporting features in RUBIC LIMS enable customers to create personalised reports. The platform makes it simpler to analyse data, evaluate performance, and make sensible choices by providing a variety of report templates and the ability to develop bespoke ones.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/Qrscan.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Barcodes for instrument receiving and dispatch</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Processes for receiving and dispatching instruments by RUBIC LIMS expedites the process of identification via barcode scanning, automated workflows, and a systematic log of the movement and state of instruments, all of which improve accountability in workflow.</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/mobilefriendly.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Mobile friendly</a></h4>
                            <div class="blog-meta mb-2">
                                <span>Mobile-friendliness is given a top priority in the design of our user-friendly RUBIC LIMS. Through the use of smartphones and tablets, this system guarantees that people can effectively access and manage critical information, providing a smooth user experience and increasing overall performance.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-sm-6">
                    <div class="blog-item card mb-4 mb-lg-0 border-0">
                        <div class="text-center pt-3">
                            <img src="images/dashboard.png" alt="" class="img-fluid feature-image">
                        </div>
                        <div class="blog-item-content p-4">
                            <h4 class="mt-2 mb-3"><a href="blog-single.html">Dashboard and lab data visualisation</a></h4>
                            <div class="blog-meta mb-2">
                                <span>The lab data visualisation in RUBIC LIMS is greatly improved with a well-designed dashboard. It uses graphs, charts, and other graphical representations to provide important information in an eye-catching way promoting easy understanding of Lab data operations.</span>
                            </div>
                        </div>
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
</div>
</div>
</section>
    <section class="pt-4 section-bottom" id="service">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-sm-6">
                    <div class="service-block mb-4 mb-lg-0">
                        <div class="container">
                            <h4 class="mb-3 mt-4">"Our Meticulous Adherence to ISO/IEC 17025 Standards"</h4>
                            <div class="row">
                                <div class="col-md-10">
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
                                <div class="col-md-2 ">
                                    <img src="images/iso17025(1).png" alt="" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
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
    <section class="feature-home section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-5">
                    <a >FAQ</a>
                    <h2 class="mb-4">What is a typical LIMS workflow?</h2>
                    <p>All of the processes illustrated here and more are integrated into one easy-to-use, effective system by RUBIC LIMS, a comprehensive solution.</p>
                    <p>In essence, every standard lab follows a similar procedure of sample flow. Our well-planned and modern RUBIC LIMS follows each and every step with great dedication and a vision to provide clients with quality work.</p>

                </div>
                <div class="col-12 col-md-7">
                    <div class="mt-5 mt-lg-0">
                        <img src="images/FAQimg.jpg" alt="" class="img-fluid ">
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
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="author-thumb mb-4 text-center py-5">
                            <img src="https://aimscal.com/public/images/CEO.jpeg" alt="Testimonial author" class="img-fluid" style="object-fit: cover">

                            <div class="test-author-info mt-2">
                                <div class="rating">
                                    <a href="#">★</a>
                                    <a href="#">★</a>
                                    <a href="#">★</a>
                                    <a href="#">★</a>
                                    <a href="#">★</a>
                                </div>

                                <h4 class="mb-0">Imtiaz Ahmed</h4>
                                <h6>CEO @ Al-Meezan Industrial Metrology Services</h6>
                                <p class="mb-0 px-5">Lab Information Management System by Rubicsol is a versatile tool for managing all sorts of lab operation, it makes sample management, lab inventory management, operation management and compliance to ISO/IEC 17025:2017 an easy task.</p>
                            </div>
                        </div>
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
                        <p>We value your feedback and concerns. Feel free to reach out to our dedicated support team! We will promptly address your inquiries with professionalism and care.</p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <i class=""><img src="/images/telephone.png" alt=""></i>
                      <p class="mb-0">Contact Quickly</p>
                      <a href="tel:+923040647306"><h5>+923040647306</h5></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <i class=""><img src="/images/email.png" alt=""></i>
                      <p class="mb-0">Email</p>
                      <a href="mailto:info@rubicsol.com"> <h5>info@rubicsol.com</h5></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-block text-center mb-4">
                        <!--Google-maps-->
                        <i class=""><img src="/images/placeholder.png" alt=""></i>
                        <p class="mb-0">Location</p>
                        <a href="https://maps.app.goo.gl/SrynNW5eGBpPJuLq6"><h5>Rubi Plaza, Awan Chowk, Near Akbar Chowk, Faisalabad</h5><a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
.module-image{
    height: 300px!important;
    object-fit:cover;
}
.contact-info-block{
    height: 250px!important;
}
.feature-image{
    height: 70px!important;
    width: 70px!important;
     object-fit: cover;
}
.contact-info-block .ti-headphone-alt{
       color: #ff9305;
}
.contact-info-block .ti-email{
       color: #ff9305;
}
.contact-info-block .ti-location-pin{
       color: #ff9305;
}

</style>
