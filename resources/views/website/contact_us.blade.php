@extends('website.layouts.master')
@section('content')
<!--conatct us-->
<section class="section contact bg-grey pt-5" id="main">
        <div class="container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="mb-2 text-lg">Contact Us</h2>
                        <p>We value your feedback and concerns. Feel free to reach out to our dedicated support team! We will promptly address your inquiries with professionalism and care.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
            <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.9958915082625!2d73.10503747469294!3d31.441780051022377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392269002087ccdb%3A0x4fb1359468d21eb9!2sRUBICSOL!5e0!3m2!1sen!2s!4v1710573989885!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 mt-5 mt-lg-0">
                        <h4 class="mb-3">Request for Demo Today!</h4>
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
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-submit px-6" id="send-message">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>







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

<style>
    .btn-submit{
        border: 1px solid #385777;
        background:white;
        color:#385777;
        padding: 12px 27px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
    }
    .btn-submit:hover{
          background-color:#385777;
          color:white;
    }
    .contact-info-block{
        height: 250px;
    }
    #name{
         height: 45px!important;
    }
    #email{
        height: 45px!important;
    }
    #subject{
        height: 45px!important;
    }
</style>