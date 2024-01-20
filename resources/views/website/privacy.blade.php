@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Privacy Policy</h2>
                </div>
                <div class="">
                    <p>
                        {!! webSettingSlug('privacy-policy') !!}
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection