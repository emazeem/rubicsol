@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img src='{{Storage::url('/services/'.$service->icon)}}' class='img-fluid' width='100'>
                        </div>
                        <div class="col-md-8 col-12" style="text-align: left !important;">
                            <h2>{{$service->name}}</h2>
                            <strong class="font-weight-bold">{{$service->category->name}}</strong>
                            <h3>{{$service->description}}</h3>
                        </div>
                        <div class="col-md-12 mt-md-4" style="text-align: left !important;">
                            {!! $service->details !!}
                        </div>
                        @foreach($service->images as $image)
                            <div class="col-md-3 p-4 img-thumbnail mt-3">
                                <img src='{{Storage::url('/service-images/'.$image->image)}}' data-id="{{$image->id}}" class='img-fluid'>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection