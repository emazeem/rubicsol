<div class="carousel-container-slider">
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <button class="slider-nav prev" id="prev"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M15 6l-6 6l6 6"></path>
        </svg></button>
    <button class="slider-nav next" id="next"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M9 6l6 6l-6 6"></path>
        </svg></button>
    <div class="carousel-wrapper">
        <div class="carousel">
            @foreach(File::allFiles(public_path('screenshots')) as $k=>$sliderImage)
                <div class="carousel-slide" tabindex="0" data-image-src="screenshots/{{$sliderImage->getRelativePathname()}}"  onclick="showModal('screenshots/{{$sliderImage->getRelativePathname()}}')" >
                    <div class="carousel-content d-none">
                        <h2>01</h2>
                        <p>Iran</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="carousel-scrollbar">
        <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
        </div>
    </div>
</div>

<style>
    .modal {
        display: none;
        position: sticky;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 80%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 100%;
        max-width: 900px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }

        .carousel-container-slider {
            display: block;
            width: 100%;
            max-width: 90vw;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .carousel-wrapper {
            display: flex;
            width: 100%;
            height: auto;
            overflow: auto;
            border-radius: 20px;
            scrollbar-width: none;
            scroll-behavior: smooth;
        }
        .carousel-wrapper::-webkit-scrollbar {
            display: none;
        }
        .carousel-wrapper.dragging {
            scroll-behavior: auto;
        }

        .carousel {
            display: flex;
            width: auto;
            width: fit-content;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            gap: 8px;
        }
        .carousel .carousel-slide {
            display: flex;
            width: 300px;
            min-width: 200px;
            height: 400px;
            flex-grow: 0;
            flex-direction: column;
            justify-content: flex-end;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff;
            transition-property: width, min-width, height, flex, flex-grow, flex-shrink, flex-basis, opacity;
            transition-duration: 240ms;
        }
        .carousel .carousel-slide img,
        .carousel .carousel-slide .carousel-image {
            display: block;
            width: 100%;
            height: 100%;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            object-fit: contain;
            object-position: center;
            transition: all 2s;
        }
        .carousel .carousel-slide .carousel-content {
            display: flex;
            width: 100%;
            max-height: 100%;
            flex-direction: column;
            justify-content: flex-end;
            position: relative;
            padding: 16px;
            color: #fff;
            transform: translateY(100%);
            backdrop-filter: blur(2px);
            transition-property: transform, color, flex, height, flex-basis, opacity;
            transition-duration: 240ms;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35));
            overflow: hidden;
            border-radius: 0 0 20px 20px;
            z-index: 2;
        }
        .carousel .carousel-slide .carousel-content h2 {
            font-size: 1.5rem;
            margin: 0;
            transition: all 240ms;
        }
        .carousel .carousel-slide .carousel-content p {
            display: none;
            font-size: 0.75rem;
            margin-top: 1em;
            line-height: 1.5;
            margin-top: 16px;
            margin-bottom: 0;
            transform: translateY(101%);
            transition-property: width, height, flex, flex-grow, flex-shrink, flex-basis, opacity, transform, margin;
            transition-duration: 240ms;
            transition-delay: 50ms;
        }
        .carousel .carousel-slide.loaded img,
        .carousel .carousel-slide.loaded .carousel-image {
            opacity: 1;
            transition-delay: 100ms;
        }
        .carousel .carousel-slide.loaded .carousel-content {
            transition-delay: 100ms;
            transform: translateY(0%);
        }
        .carousel .carousel-slide.loaded .carousel-content h2 {
            font-size: 1.5rem;
        }
        .carousel .carousel-slide:hover .carousel-content {
            backdrop-filter: blur(15px);
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
        }
        .carousel:hover .carousel-slide:not(:hover):not(.active) {
            opacity: 0.5;
        }

        button.slider-nav {
            display: inline-flex;
            width: 40px;
            height: 40px;
            min-width: 40px;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            border-radius: 999px;
            background-color: #fff;
            position: absolute;
            top: 50%;
            z-index: 1;
            cursor: pointer;
        }
        button.slider-nav svg {
            pointer-events: none;
        }
        button.slider-nav:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        button.prev {
            left: 0;
            transform: translate(-50%, calc(-50% - 13px));
        }

        button.next {
            right: 0;
            transform: translate(50%, calc(-50% - 13px));
        }

        .carousel-scrollbar,
        .carousel-scrollbar .scrollbar-track {
            display: flex;
            width: 100%;
            align-items: center;
        }

        .slider-start button.prev {
            visibility: hidden !important;
            display: none;
        }

        .slider-end button.next {
            visibility: hidden !important;
        }

        .carousel-scrollbar {
            margin-top: 16px;
            padding: 4px 0;
        }
        .carousel-scrollbar .scrollbar-track {
            border-radius: 999px;
            height: 2px;
            background-color: rgba(0, 0, 0, 0.2);
        }
        .carousel-scrollbar .scrollbar-thumb {
            width: 20%;
            height: 100%;
            border-radius: 999px;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0.8);
            transition: transform 200ms, background-color 200ms, height 200ms;
        }
        .carousel-scrollbar .scrollbar-thumb::after {
            content: "";
            display: block;
            height: 16px;
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }
        .carousel-scrollbar .scrollbar-thumb:hover {
            height: 250%;
        }
        .carousel-scrollbar .scrollbar-thumb.dragging, .carousel-scrollbar .scrollbar-thumb.dragging:hover {
            background-color: black;
            height: 400%;
        }
        .carousel-scrollbar .scrollbar-thumb.dragging::after {
            height: 24px;
        }
    </style>
<script>
        function updateModal(imageSrc) {
            $('#modalImage').attr('src', imageSrc);
            $('#imageModal').modal('show');
        }
        document.addEventListener("DOMContentLoaded", () => {
            document.body.classList.add("loading");

            const carousel = document.querySelector(".carousel-wrapper");
            const carouselSlides = document.querySelectorAll(".carousel-slide");
            const carouselButtons = document.querySelectorAll("button.slider-nav");
            const sliderScrollbar = document.querySelector(".carousel-scrollbar");
            const sliderScrollbarThumb = document.querySelector(
                ".carousel-scrollbar .scrollbar-thumb"
            );

            let carouselMaxScroll = carousel.scrollWidth - carousel.clientWidth;

            const resizeScrollbarThumb = () => {
                sliderScrollbarThumb.style.width = `${
                    (carousel.clientWidth / carousel.scrollWidth) * 100
                }%`;
            };

            resizeScrollbarThumb();

            let interval;
            let spaceBetween = 8;
            let slideWidth = 300;
            let slidesPerView = Math.floor(
                carousel.clientWidth / (slideWidth + spaceBetween)
            );

            const hideShowSliderNavButtons = (sliderElement) => {
                if (sliderElement) {
                    document.body.classList.toggle(
                        "slider-start",
                        sliderElement.scrollLeft - 3 <= 0
                    );
                    document.body.classList.toggle(
                        "slider-end",
                        sliderElement.scrollLeft + sliderElement.offsetWidth + 3 >=
                        sliderElement.scrollWidth
                    );
                } else {
                    console.error("sliderElement is not defined");
                }
            };

            let startX,
                thumbPosition,
                isMouseDown = false;

            const positionScrollbarThumb = () => {
                const scrollPositionX = carousel.scrollLeft;
                const thumbPositionX =
                    (scrollPositionX / carouselMaxScroll) *
                    (sliderScrollbar.clientWidth - sliderScrollbarThumb.offsetWidth);
                sliderScrollbarThumb.style.left = `${thumbPositionX}px`;
            };

            if (carouselSlides && carouselSlides.length > 0) {
                let intersectionObserver = new IntersectionObserver(
                    (entries) => {
                        entries.map((slide) => {
                            if (slide.isIntersecting) {
                                let image = new Image();
                                image.src = slide.target.dataset.imageSrc;
                                image.className = "carousel-image";
                                image.onload = (event) => {
                                    slide.target.prepend(image);
                                    let index = parseInt(slide.target.dataset.index);
                                    index = index % slidesPerView;
                                    window.setTimeout(() => {
                                        slide.target.classList.add('loaded');
                                    }, (500 * index));
                                    intersectionObserver.unobserve(slide.target);
                                };
                            }
                        });
                    },
                    {
                        root: carousel
                    }
                );

                carouselSlides.forEach((slide) => {
                    intersectionObserver.observe(slide);
                });
            }

            if (carousel) {
                carousel.addEventListener("scroll", (event) => {
                    let sliderWrapper = event.target || carousel;
                    hideShowSliderNavButtons(sliderWrapper);
                    positionScrollbarThumb();
                });

                hideShowSliderNavButtons(carousel);
            }

            if (carouselButtons && carouselButtons.length > 0) {
                carouselButtons.forEach((button) => {
                    button.addEventListener("click", (event) => {
                        event.preventDefault();
                        let direction = event.target.id === "prev" ? -1 : 1;
                        let slidesPerView = Math.floor(
                            carousel.clientWidth / (slideWidth + spaceBetween)
                        );
                        let amountToScroll = (slideWidth + spaceBetween) * slidesPerView;
                        carousel.scrollLeft += Math.floor(amountToScroll * direction);
                    });
                });
            }

            if (sliderScrollbarThumb) {
                sliderScrollbarThumb.addEventListener("mousedown", (event) => {
                    event.preventDefault();
                    isMouseDown = true;
                    sliderScrollbarThumb.classList.add("dragging");
                    carousel.classList.add("dragging");
                    startX = event.clientX;
                    thumbPosition = event.target.offsetLeft;
                });

                document.addEventListener("mousemove", (event) => {
                    if (!isMouseDown) return;
                    event.preventDefault();
                    const deltaX = event.clientX - startX;
                    const newThumbPosition = thumbPosition + deltaX;
                    const maxThumbPosition =
                        sliderScrollbar.getBoundingClientRect().width -
                        sliderScrollbarThumb.offsetWidth;
                    const thumbPositionX = Math.max(
                        0,
                        Math.min(maxThumbPosition, newThumbPosition)
                    );
                    const sliderScrollLeft =
                        (thumbPositionX / maxThumbPosition) * carouselMaxScroll;
                    sliderScrollbarThumb.style.left = `${thumbPositionX}px`;
                    carousel.scrollLeft = sliderScrollLeft;
                });

                const stopScrolling = (event) => {
                    event.preventDefault();
                    isMouseDown = false;
                    sliderScrollbarThumb.classList.remove("dragging");
                    carousel.classList.remove("dragging");
                };

                document.addEventListener("mouseup", stopScrolling);
            }

            window.onresize = function () {
                carouselMaxScroll = carousel.scrollWidth - carousel.clientWidth;
                slideWidth = 300;
                slidesPerView = Math.floor(carousel.clientWidth / slideWidth);
                resizeScrollbarThumb();
                positionScrollbarThumb();
            };
        });

        window.onload = function () {
            if (document.body.classList.contains("loading")) {
                document.body.classList.add("loaded");
            } else {
                setTimeout(() => {
                    document.body.classList.add("loaded");
                }, 1000);
            }
        };












        function showModal(path){
            var modal = $('#myModal');
            var modalImg = $('#img01');

            modal.css('display', 'block');
            modalImg.attr('src', path);
            var span = $('.close').eq(0);

            span.on('click', function() {
                modal.css('display', 'none');
            });
        }
        $(document).ready(function(){

        });

    </script>
