<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{env('APP_NAME')}} | @yield('document-title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{asset('libs/aos/aos.css')}}" rel="stylesheet">
    @vite(['resources/scss/bootstrap.scss','resources/css/icons.scss'])
    <link href="{{asset('libs/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('libs/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo"><img src="{{asset('img/logo2.png')}}" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="{{route('home')}}">Accueil</a></li>
                <li class="dropdown"><a
                        class=" @if(\Illuminate\Support\Facades\Request::url() === route('apropos')) active @endif"
                        href="{{route('apropos')}}"><span>À propos</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('apropos')}}/#quinoussomme">Qui sommes-nous ?</a></li>
                        <li><a href="{{route('apropos')}}/#mission">Mission, Vision et Valeurs</a></li>
                        <li><a href="{{route('apropos')}}/#motdepresident">Mot du président</a></li>
                        <li><a href="{{route('apropos')}}/#gouvernance">Notre gouvernance</a></li>
                        <li><a href="{{route('apropos')}}/#statut">Statut</a></li>
                        <li><a href="{{route('apropos')}}/#regelemet">Règlement intérieur</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a
                        class=" @if(\Illuminate\Support\Facades\Request::url() === route('nosactivites')) active @endif"
                        href="{{route('nosactivites')}}"><span>Nos activités</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('nosactivites')}}/#aide">Aide Sanitaire</a></li>
                        <li><a href="{{route('nosactivites')}}/#solidarite">Solidarité et Inclusion Sociale</a></li>
                    </ul>
                </li>
                <li><a class="nav-link  " href="{{route('home')}}#projets-et-realisations">Projets et réalisations</a>
                </li>
                <li><a class="nav-link  " href="{{route('home')}}#nos-partenaires">Nos partenaires</a></li>
                <li><a class="nav-link " href="{{route('home')}}#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>


<main id="main" data-aos="fade-up">
    @yield('main')

</main>

@include('home.partials.__footer')
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script type="module" src="{{asset('libs/pdfjs/pdf.mjs')}}"></script>
<script type="module" src="{{asset('libs/pdfjs/pdf.worker.mjs')}}"></script>
<script src="{{asset('libs/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('libs/aos/aos.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('libs/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('libs/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('libs/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('libs/php-email-form/validate.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
@stack('scripts')

</body>

</html>
