@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>
                        {{webSettingSlug('team-line-1')}}

                    </p>
                </div>

                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src='{{Storage::url('/team/'.$team->profile)}}' class='img-fluid' >
                                    <div class="social">
                                        <a href=""><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{$team->name}}</h4>
                                    <span>{{$team->position}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->
    </main>
@endsection