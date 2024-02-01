<section class='c-slider pt-0' id="hero">
    <div class='c-slider-init'>
        <div class='c-slide' style="background-image:url(Rubicsol_slider_1.jpeg)">
            <div class='c-slide-content'>
                <div class='c-wrap c-wrap--line'>
                    <h2 class='c-slide__title'>

                        <span class='c-slide__title--large'></span>
                    </h2>
                </div>
                <div class='c-wrap c-wrap--small'>
                    <div class='c-slide__info'>
                        <h3 class='c-slide__subtitle'>RUBICSOL</h3>
                        <p class='c-slide__body'>Streamline Your Lab Operations with Our Cutting-Edge RUBIC LIMS Solution!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='c-slide' style="background-image:url(Rubicsol_slider_2.jpeg)">
            <div class='c-slide-content'>
                <div class='c-wrap c-wrap--line'>
                    <h2 class='c-slide__title'>

                        <span class='c-slide__title--large'> </span>
                    </h2>
                </div>
                <div class='c-wrap c-wrap--small'>
                    <div class='c-slide__info'>
                        <h3 class='c-slide__subtitle'>RUBICSOL</h3>
                        <p class='c-slide__body'>Streamline Your Lab Operations with Our Cutting-Edge RUBIC LIMS Solution!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<style>


    .slick-slide{
        height: 80vh!important;
    }
    .c-navigation__list-item--active > a {
        position: relative;
    }
    .c-navigation__list-item--active > a:after {
        content: "";
        width: 100%;
        height: 1px;
        background-color: #ff4c42;
        position: absolute;
        bottom: -0.4rem;
        left: 0;
    }


    .c-cta > a {
        font-size: 0.9em;
        opacity: 0.7;
        font-weight: 500;
        text-transform: uppercase;
        margin: 0 2rem;
    }



    .c-cta__button__search svg {
        width: inherit;
        height: inherit;
        fill: white;
    }



    .c-socials__list-item a svg {
        width: 21px;
        height: 21px;
    }

    .c-slide {
        display: inline-flex !important;
        align-items: center;
        width: 100%;
        height: 80vh;
        background-position: center;
        background-size: cover;
        will-change: background-size;
        position: relative;
        transition: 1s ease;
        transition-delay: 0.4s;
    }
    .c-slide:after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.61) 76%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#9c000000", GradientType=0 );
    }

    .c-slide-content {
        padding: 2rem;
        margin: 0 auto;
        width: 100%;
        z-index: 2;
        margin-top: 300px;
        max-width: 1200px;
    }

    .c-slide__title {
        font-size: 4em;
        text-transform: uppercase;
        letter-spacing: 20px;
        transform: translateY(150px);
        opacity: 0;
        transition: 0.8s ease;
        will-change: opacity, transform;
        color: white;
    }

    .c-slide__title--large,
    .c-slide__title--medium {
        display: block;
        font-size: 2.5em;
        line-height: 110px;
        transform: translateY(150px);
        will-change: transform;
        transition-delay: 0.4s;
        position: relative;
        transition: 1s ease;
    }

    .c-slide__title--medium {
        font-size: 1.6em;
        line-height: 100px;
    }

    .c-slide__subtitle {
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .c-slide__body {
        margin-top: 0.7rem;
        opacity: 0;
        line-height: 27px;
    }

    .c-slide__info {
        transform: translateY(-150px);
        transition: 0.8s ease;
        color: white;
    }

    .c-wrap {
        padding: 2rem 0;
        overflow: hidden;
    }

    .c-wrap--small {
        max-width: 30%;
    }

    .c-wrap--line {
        position: relative;
    }
    .c-wrap--line:after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 1px;
        background-color: white;
        bottom: 0;
        transition: 0.9s ease;
        transition-delay: 0.4s;
    }

    .slick-list {
        overflow: visible !important;
    }

    .animateIn .c-slide__title--large,
    .animateIn .c-slide__title--medium,
    .animateIn .c-slide__info,
    .animateIn .c-slide__title,
    .animateIn .c-slide__body,
    .initialAnimation .c-slide__title--large,
    .initialAnimation .c-slide__title--medium,
    .initialAnimation .c-slide__info,
    .initialAnimation .c-slide__title,
    .initialAnimation .c-slide__body {
        transform: translateY(0);
        opacity: 1;
    }
    .animateIn .c-wrap--line:after,
    .initialAnimation .c-wrap--line:after {
        left: 0;
        transform: translateX(0);
        width: 100%;
    }



    @media only screen and (max-width: 1300px) {
        .c-slide__title {
            font-size: 3em;
        }

        .c-slide__title--large {
            font-size: 2em;
        }

        .c-wrap--small {
            max-width: 50%;
        }
    }

    @media only screen and (max-width: 800px) {
        .c-slide__title--medium {
            font-size: 1.3em;
        }

        .c-slide__title {
            font-size: 2.5em;
        }

        .c-slide__title--large {
            font-size: 1.5em;
        }

        .c-wrap--small {
            max-width: 80%;
        }
    }
</style>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <script src="https://rawgit.com/cfoehrdes/slick/master/slick/slick.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".c-slider-init").slick({
                dots: false,
                nav: false,
                arrows: false,
                infinite: true,
                speed: 1200,
                autoplaySpeed: 5000,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                draggable: false,
                pauseOnFocus: false,
                pauseOnHover: false
            });

            jQuery(".slick-current").addClass("initialAnimation");

            let transitionSetup = {
                target: ".slick-list",
                enterClass: "u-scale-out",
                doTransition: function() {
                    var slideContainer = document.querySelector(this.target);
                    slideContainer.classList.add(this.enterClass);
                    jQuery(".slick-current").removeClass("animateIn");
                },
                exitTransition: function() {
                    var slideContainer = document.querySelector(this.target);
                    setTimeout(() => {
                        slideContainer.classList.remove(this.enterClass);
                        jQuery(".slick-current").addClass("animateIn");
                    }, 2000);
                }
            };

            var i = 0;
            // On before slide change
            jQuery(".c-slider-init").on("beforeChange", function(
                event,
                slick,
                currentSlide,
                nextSlide
            ) {
                if (i == 0) {
                    event.preventDefault();
                    transitionSetup.doTransition();
                    i++;
                } else {
                    i = 0;
                    transitionSetup.exitTransition();
                }

                jQuery(".c-slider-init").slick("slickNext");
                jQuery(".slick-current").removeClass("initialAnimation");
            });
        });

    </script>
@endpush
