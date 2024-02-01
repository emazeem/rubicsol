@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5 bg-c-primary border-bottom">
        <div class="container" data-aos="fade-up">

            <section class="pricing-section">
                <div class="container-fluid">
                    <div class="outer-box">
                        <div class="section-title  mt-5 pt-5">
                            <h2 class="text-c-secondary">Pricing Plan</h2>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="pricing-block wow fadeInUp" data-wow-delay="400ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon-outer"><i class="bx bx-diamond"></i></div>
                                    </div>
                                    <div class="price-box">
                                        <div class="title">Standard Package</div>
                                        <h4 class="price">$50,000</h4>
                                    </div>
                                    <ul class="features">
                                        <li>Free Dedicated Domain</li>
                                        <li>1 Year Support</li>
                                        <li>10 Years Subscription</li>
                                        <li>Free Hosting Plan</li>
                                        <li>SSL</li>
                                        <li>Backup Plan for Storage & Database</li>
                                        <li>Unlimited Record</li>
                                    </ul>
                                    <div class="btn-box">
                                        <a href="{{url('contact-us')}}" class="theme-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
<style>

    .pricing-section {
        position: relative;
        overflow: hidden;
    }
    .pricing-section .outer-box{
        margin: 0 auto;
    }


    .pricing-section .row{
        margin: 0 -30px;
    }

    .pricing-block{
        position: relative;
        padding: 0 30px;
        margin-bottom: 40px;
    }

    .pricing-block .inner-box{
        position: relative;
        background-color: #ffffff;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        padding: 0 0 30px;
        max-width: 370px;
        margin: 0 auto;
        border-bottom: 20px solid #ff9305;
    }

    .pricing-block .icon-box{
        position: relative;
        padding: 50px 30px 0;
        background-color: #ff9305;
        text-align: center;
    }

    .pricing-block .icon-box:before{
        position: absolute;
        left: 0;
        bottom: 0;
        height: 75px;
        width: 100%;
        border-radius: 50% 50% 0 0;
        background-color: #ffffff;
        content: "";
    }


    .pricing-block .icon-box .icon-outer{
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 50%;
        margin: 0 auto;
        padding: 10px;
    }

    .pricing-block .icon-box i{
        position: relative;
        display: block;
        height: 130px;
        width: 130px;
        line-height: 120px;
        border: 5px solid #ff9305;
        border-radius: 50%;
        font-size: 50px;
        color: #ff9305;
        -webkit-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .pricing-block .inner-box:hover .icon-box i{
        transform:rotate(360deg);
    }

    .pricing-block .price-box{
        position: relative;
        text-align: center;
        padding: 10px 20px;
    }

    .pricing-block .title{
        position: relative;
        display: block;
        font-size: 24px;
        line-height: 1.2em;
        color: #222222;
        font-weight: 600;
    }

    .pricing-block .price{
        display: block;
        font-size: 30px;
        color: #222222;
        font-weight: 700;
        color: #ff9305;
    }


    .pricing-block .features{
        position: relative;
        margin: 0 auto 20px;
    }

    .pricing-block .features li{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 30px;
        color: #848484;
        font-weight: 500;
        padding: 5px 0;
        padding-left: 30px;
        border-bottom: 1px dashed #dddddd;
    }
    .pricing-block .features li:before {
        position: absolute;
        left: 0;
        top: 35%;
        font-size: 25px;
        color: #ff9305;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "☑";
        font-family: "Font Awesome 5 Free";
        margin-top: -8px;
    }


    .pricing-block .features li a{
        color: #848484;
    }

    .pricing-block .features li:last-child{
        border-bottom: 0;
    }

    .pricing-block .btn-box{
        position: relative;
        text-align: center;
    }

    .pricing-block .btn-box a{
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 25px;
        color: #ffffff;
        font-weight: 500;
        padding: 8px 30px;
        background-color: #ff9305;
        border-radius: 10px;
        border-top:2px solid transparent;
        border-bottom:2px solid transparent;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 300ms ease;
    }

    .pricing-block .btn-box a:hover{
        color: #ffffff;
    }
</style>
