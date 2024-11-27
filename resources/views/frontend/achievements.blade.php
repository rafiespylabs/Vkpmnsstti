<x-web-layout>
@push('styles')
<style>
    * {
        box-sizing: border-box;
    }

    .body {
        font-family: Lato, sans-serif;
        margin: 0;
        padding: 1rem;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgb(255, 255, 255);
    }

    .img {
        width: 100%;
        display: block;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        transition: transform 1000ms;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 0.5rem;
        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
        max-width: 100%;
        width: 70rem;
    }

    figure {
        margin: 0;
        position: relative;
        overflow: hidden;
    }

    figure::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 200%;
        background: rgba(0, 0, 0, 0.5);
        transform-origin: center;
        opacity: 0;
        transform: scale(2);
        transition: opacity 300ms;
    }

    figcaption {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        place-items: center;
        text-align: center;
        padding: 1rem;
        color: white;
        font-size: 1.2rem;
        z-index: 1;
        opacity: 0;
        transition: opacity 600ms, transform 600ms;
    }

    a:is(:hover, :focus) figure::after {
        opacity: 1;
    }

    a:is(:hover, :focus) figcaption {
        opacity: 1;
        transition: opacity 600ms;
    }

    @media (prefers-reduced-motion: no-preference) {
        figcaption {
            transform: translate3d(0, 2rem, 0);
        }

        figure::after {
            border-radius: 50%;
            opacity: 1;
            transform: scale(0);
            transition: transform 900ms;
        }

        a:is(:hover, :focus) figure::after {
            transform: scale(2.5);
        }

        a:is(:hover, :focus) figcaption {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            transition: opacity 600ms 400ms, transform 600ms 400ms;
        }

        a:is(:hover, :focus) img {
            transform: scale(1.2);
        }
    }
</style>
@endpush
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Achievements</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Achievements</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="display: flex; justify-content: center;align-items: center;">
        <h4>KERALA PSC RANK HOLDERS OF VKPM</h4>
    </div>
    <div class="body">
        <ul>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/Rank2.jpg")}}'
                            alt='Volcano and lava field against a stormy sky'>
                        <p>INDU S KUMAR (Rank 2)</p>
                        <figcaption>INDU S KUMAR (Rank 2)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">

                    <figure>

                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0109.jpg")}}'
                            alt='Guy on a bike ok a wooden bridge with a forest backdrop'>
                        <p>VIDYA M R (Rank 5)</p>
                        <figcaption>VIDYA M R (Rank 5)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/New Doc 10-16-2024 20.46_page-0001.jpg")}}'
                            alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                        <p>MEERA S NAIR (Rank 7)</p>
                        <figcaption> MEERA S NAIR (Rank 7)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0126.jpg")}}'
                            alt='Person hiking on a trail through mountains while taking a photo with phone'>
                        <p>SHEMEENA K.M (Rank 16)</p>
                        <figcaption>SHEMEENA K.M (Rank 16)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0107.jpg")}}'
                            alt='Person standing alone in a misty forest'>
                        <p>SRUTHI VENUGOPAL (Rank 33)</p>
                        <figcaption>SRUTHI VENUGOPAL (Rank 33)</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0105~2.jpg")}}'
                            alt='Street scene with person walking and others on motorbikes, all wearing masks'>
                        <p>RENJINI.P.V(Rank 37)</p>
                        <figcaption>RENJINI.P.V(Rank 37)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0106.jpg")}}'
                            alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                        <p>ANITTAMOL THOMAS (Rank 62)</p>
                        <figcaption>ANITTAMOL THOMAS (Rank 62)</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/IMG-20241016-WA0120.jpg")}}'
                            alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                        <p>ANJANA VASUDEVAN (Rank 78)</p>
                        <figcaption>ANJANA VASUDEVAN (Rank 78)</figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="">
                    <figure>
                        <img class="img" src='{{asset("assets/web/img/client/Students/THE__BOYS.jpg")}}'
                            alt='Fashionable-looking girl with blond hair and pink sunglasses'>
                        <p>ARUN V(Rank 84)</p>
                        <figcaption>ARUN V(Rank 84)</figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    </div>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/Achievements.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">C TET WINNERS</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/Quiz_Competition.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">All Kerala Maths Quiz Competition -First prize (Harikrishna Babu & Faseela Fareeth)</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/WhatsApp Image 2024-10-14 at 10.18.19_ab2c44e7.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">K.TET WINNERS</h5>
                                </div>
                            </a>
                        </div>                        
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/IMG-20240822-WA0044.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/Adobe Scan 11 Sept 2024 (2).jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/news1.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/Anti Drug Wall painting competition.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Anti Drug Wall painting competition Second prize</h5>
                                </div>
                            </a>
                        </div>       
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/news3.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/district_youthfestivel.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">Light music first in district youth festival 2024</h5>
                                </div>
                            </a>
                        </div>                                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>