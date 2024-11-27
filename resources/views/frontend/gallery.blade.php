<x-web-layout>
@push('styles')
<style>
    @media (min-width: 300px) {
        .img-fluid1 {
            height: 300px;
            width: auto;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .img-fluid1 {
            height: 200px;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .img-fluid1 {
            height: 200px;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .img-fluid1 {
            height: 200px;
        }
    }

    /* Extra extra large devices (very large screens, 1400px and up) */
    @media (min-width: 1400px) {
        .img-fluid1 {
            height: 200px;
        }
    }
</style>
@endpush
    <div class="container-fluid bg-primary py-5 mb-5 "
        style="background : linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url('/assets/web/img/client/college/VKPM\ NSS\ TTI\ -PHOTO.jpeg');background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3  animated slideInDown" style="color: rgb(255, 255, 255);">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class=""
                                    style="font-weight: 500 ;font-size:larger;color: white;" href="#">Home</a></li>

                            <li class="breadcrumb-item  "
                                style="font-weight: 500 ;font-size:larger;color: rgb(255, 255, 255);"
                                aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Service Start -->
     <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/KSE09677.JPG')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">College</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/20241005152749_IMG_7466-01.jpeg.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">main entrance</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/20241005153352_IMG_7495-01.jpeg.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Top view</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/library.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Library</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/maths_lab.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Maths Lab</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/science_lab.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Science Lab</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/college/computer_lab.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Computer Lab</small>
                                </div>
                            </a>
                        </div>                       
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/KSE09687.JPG')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Our College</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/web/img/client/Gallery/golden_jubily_1.jpg')}}"
                                    alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary">Golden Jubilee</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>