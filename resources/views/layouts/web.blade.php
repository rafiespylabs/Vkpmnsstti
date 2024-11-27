<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>VKPM-Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link href="img/favicon.ico" rel="icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="{{asset('assets/web/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/web/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/web/css/style.css')}}" rel="stylesheet">
        @stack('styles')
    </head>
    <style>
        @media (min-width: 300px) {
            .img-fluid1 {
                height: 300px;
                width: auto;
            }

            .hidden {
                display: none;
            }

            .email_class {
                margin-left: 80px;
                display: none;
            }
        }
        @media (min-width: 100px) {



            .email_class {
                margin-left: 80px;
            }
        }
        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .img-fluid1 {
                height: 200px;
            }

            .email_class {
                margin-left: 80px;
                display: block;
            }
        }
        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .img-fluid1 {
                height: 200px;
            }

            .hidden {
                display: block;
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
        .marquee {
            width: 100%;
            height: 40px;
            /* Adjusted for both lines */
            background-color: blue;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
        }
        .marquee p {
            position: absolute;
            white-space: nowrap;


            display: flex;
            margin-top: 20px;
            transition: all .3s ease-in;
            animation: moveText 16s linear infinite;
            color: white;
            font-size: 20px;
        }
        .marquee span {
            margin-right: 40px;
            /* Adjust space between text lines */
        }
        @keyframes moveText {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
        .marquee p:hover {
            animation-play-state: paused;
            color: black;
        }
    </style>
    <body>
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        @include('layouts.web.header')
        {{ $slot }}
        @include('layouts.web.footer')
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/web/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/web/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/web/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/web/js/main.js')}}"></script>
        @stack('scripts')
    </body>
</html>