@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img src='{{Storage::url('/team/'.$team->profile)}}' class='img-fluid' >
                        </div>
                        <div class="col-md-8 col-12" style="text-align: left !important;">
                            <h2>{{$team->name}}</h2>
                            <h3>{{$team->description}}</h3>
                            {!! $team->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection