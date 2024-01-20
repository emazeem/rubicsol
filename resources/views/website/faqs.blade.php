@extends('website.layouts.master')
@section('content')
    <main id="main" class="mt-5">
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        {{webSettingSlug('faq-line-1')}}
                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        @foreach($faqs as $k=>$faq)
                            <li data-aos="fade-up" data-aos-delay="{{$k*100}}">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{$k}}" class="collapsed">
                                    {{$faq->question}} <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-{{$k}}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{$faq->answer}}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection