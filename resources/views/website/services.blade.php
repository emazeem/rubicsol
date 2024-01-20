@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>{{webSettingSlug('services-line-1')}}</p>
                </div>

                <div class="row">
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-yellow">
                                <div class="icon">
                                    <img src='{{Storage::url('/services/'.$service->icon)}}' class='img-fluid' width='100'>
                                </div>
                                <h4><a href="{{url('service/'.$service->id)}}">{{$service->name}}</a></h4>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Sevices Section -->
    </main>

@endsection