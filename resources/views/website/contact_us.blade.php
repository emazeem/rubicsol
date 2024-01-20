@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title text-left">
                    <h2>Contact us</h2>
                    <h6>Ready to Take Your Lab to the Next Level? Contact Us Today!</h6>
                    <p>
                        We're here to answer any questions you have about our innovative LIMS solution. Whether you're looking to streamline operations, ensure compliance, or drive scientific excellence, our expert team is ready to assist you.
                        Take the first step towards unleashing the full potential of your lab. Contact us today and discover how our LIMS can transform your operations, boost productivity, and deliver accurate results. Let us be your partner in achieving success in the world of laboratory management.

                    </p>
                    <ul style="list-style-type: none;text-align: left" class="mt-4">
                        <li>
                            📞 Call us now to speak with a LIMS specialist and discuss how our solution can meet your unique lab requirements.

                        </li>
                        <li>
                            📧 Send us an email with your inquiries, and our dedicated team will provide you with detailed information and personalized guidance.

                        </li>
                        <li>
                            💼 Schedule a demo to experience the power of our LIMS firsthand. See how it can revolutionize your lab processes, improve efficiency, and elevate your performance.
                        </li>
                    </ul>

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
                                <p>{{webSettingSlug('contact-location')}}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{webSettingSlug('contact-email')}}</p>

                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>{{webSettingSlug('contact-phone')}}</p>

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
