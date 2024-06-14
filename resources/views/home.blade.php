<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tarmiz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <script src="https://kit.fontawesome.com/a5fdcae6a3.js" crossorigin="anonymous"></script>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">


            <div class="logo-container">
                <div class="img">
                    <img src="{{asset('img/logo.png')}}" alt="" class="logo">
                </div>
                <div class="h1">
                    <h1 class="sitename d-inline">Tarmiz</h1>

                </div>
            </div>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#solutions">Solutions</a></li>
                <li><a href="#team">Blog</a></li>
                <li><a href="#pricing">Recrutement</a></li>
                <li><a href="#contact">Nous Contacte</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
</header>

<main class="main">


    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1 class="">Votre Partenaire pour une Transformation Digitale Réussie</h1>
                    <p class="">TARMIZ vous accompagne avec des solutions innovantes et personnalisées. La technologie
                        est notre levier pour atteindre vos objectifs et optimiser vos processus.</p>
                    <div class="d-flex">
                        <a href="#contact" class="btn-get-started">Contacter nous</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    @if(false)

        <section id="clients" class="clients section">

            <div class="container" data-aos="zoom-in">
                <div class="swiper">
                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 5,
                    "spaceBetween": 120
                  },
                  "1200": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }




                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-1.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-2.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-3.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-4.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-5.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-6.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-7.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-8.png')}}" class="img-fluid"
                                                       alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endif

    <section id="about" class="about section">


        <div class="container section-title" data-aos="fade-up">
            <h2 class="">À propos</h2>
        </div>

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Valeurs:

                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>--</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>--</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i><span>--</span></li>
                        <li><i class="bi bi-check2-circle"></i><span>--</span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>TARMIZ est votre partenaire de confiance en développement informatique, spécialisé dans les
                        solutions de gestion et industrielles. Nous accompagnons nos clients dans leur transformation
                        digitale en fournissant des solutions sur mesure, parfaitement adaptées à leurs besoins
                        spécifiques.
                        Notre mission est d'utiliser la technologie comme un outil puissant pour atteindre vos
                        objectifs. Avec TARMIZ, propulsez votre entreprise vers de nouveaux sommets dans l'ère
                        numérique. </p>
                </div>

            </div>

        </div>

    </section>
    @if(false)

        <section id="why-us" class="section why-us" data-builder="section">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class=""><span class="">Eum ipsam laborum deleniti </span><strong>velit pariatur
                                    architecto
                                    aut nihil</strong></h3>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">

                                <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus
                                        dolor
                                        purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros
                                        in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="{{asset('img/why-us.png')}}" class="img-fluid" alt="" data-aos="zoom-in"
                             data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section>


        <section id="skills" class="skills section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center">
                        <img src="{{asset('img/skills.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 content">

                        <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>

                        <div class="skills-content skills-animation">

                            <div class="progress">
                                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section>
    @endif


    <section id="services" class="services section">


        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
        </div>

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Développement Web/Mobile</a></h4>
                        <p>Créez des applications web et mobiles sur mesure pour améliorer l'expérience utilisateur et
                            optimiser vos processus métier.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Solution Industrielle et
                                Intelligente</a></h4>
                        <p>Optimisez vos opérations industrielles grâce à des solutions digitales innovantes et sur
                            mesure.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa-solid fa-globe"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Création des sites web</a></h4>
                        <p>Concevez des sites web professionnels, performants et adaptés à vos besoins pour renforcer
                            votre présence en ligne.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa fa-bullseye"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Conseil en digital</a></h4>
                        <p>Définissez et mettez en œuvre une stratégie digitale efficace pour atteindre vos objectifs
                            commerciaux.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Formation en digital</a></h4>
                        <p> Développez les compétences de vos équipes en matière de marketing digital, réseaux sociaux
                            et outils digitaux.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa fa-shield-alt"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Sécurité informatique</a></h4>
                        <p> Protégez vos données et vos systèmes informatiques contre les cyberattaques et les
                            intrusions malveillantes.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa fa-wrench"></i></div>
                        <h4><a href="service-details.html" class="stretched-link">Support technique et maintenance
                                logiciel</a></h4>
                        <p> Assurez le bon fonctionnement de vos logiciels et bénéficiez d'une assistance technique
                            réactive en cas de besoin.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa fa-bullhorn"></i></div>
                        <h4><a href="service-details.html" class="stretched-link"></a>Digital marketing</h4>
                        <p>Augmentez votre visibilité en ligne, générez du trafic qualifié et convertissez vos prospects
                            en clients.</p>
                    </div>
                </div>


            </div>

        </div>

    </section>
    @if(false)

        <section id="call-to-action" class="call-to-action section">

            <img src="{{asset('img/cta-bg.jpg')}}" alt="">

            <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>

        </section>

        <section id="solutions" class="solutions section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Solutions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="solutions-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-app">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-1.jpg')}}" title="App 1"
                                   data-gallery="solutions-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-product">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-2.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-2.jpg')}}" title="Product 1"
                                   data-gallery="solutions-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-branding">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-3.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-3.jpg')}}" title="Branding 1"
                                   data-gallery="solutions-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-app">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-4.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-4.jpg')}}" title="App 2"
                                   data-gallery="solutions-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-product">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-5.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-5.jpg')}}" title="Product 2"
                                   data-gallery="solutions-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-branding">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-6.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-solutions/masonry-portfolio-6.jpg')}}" title="Branding 2"
                                   data-gallery="solutions-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-app">
                            <img src="{{asset('img/masonry-solutions/masonry-portfolio-7.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-7.jpg')}}" title="App 3"
                                   data-gallery="solutions-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-product">
                            <img src="{{asset('img/masonry-portfolio/masonry-portfolio-8.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-portfolio-8.jpg')}}" title="Product 3"
                                   data-gallery="solutions-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 solutions-item isotope-item filter-branding">
                            <img src="{{asset('img/masonry-portfolio/masonry-solutions-9.jpg')}}" class="img-fluid"
                                 alt="">
                            <div class="solutions-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{asset('img/masonry-portfolio/masonry-solutions-9.jpg')}}" title="Branding 2"
                                   data-gallery="solutions-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="solutions-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
    @endif

    <section id="team" class="team section">


        <div class="container section-title" data-aos="fade-up">
            <h2>Blog</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card" role="button">
                        <div class="blog-pic">
                            <img src="{{asset('img/articles/article-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="blog-content">
                            <h4>Article example</h4>
                            <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dicta
                                exercitationem facilis sunt voluptatum. Amet esse fugiat incidunt nihil, quod rerum
                                vitae voluptate! Consectetur deserunt hic nulla ratione voluptates voluptatibus.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    @if(false)

        <section id="testimonials" class="testimonials section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper">
                    <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }






                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img"
                                     alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img"
                                     alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img"
                                     alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img"
                                     alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonials/testimonials-5.jpg')}}" class="testimonial-img"
                                     alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>


        <section id="faq-2" class="faq-2 section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="faq-container">

                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus
                                        dolor
                                        purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros
                                        in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros
                                        in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                        in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus
                                        in</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    @endif
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Recrutement</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Développeurs Full Stack Laravel / Vue.js|React</h3>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Minimum de 3 ans d'expérience en développement web, en particulier en tant que développeur Full Stack.</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Solides compétences en Laravel et Vue.js ou React.</span></li>
                            <li><i class="bi bi-check"></i> <span>Maîtrise du français à l'oral et à l'écrit.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Capacité à travailler de manière autonome et en équipe.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Compréhension approfondie des meilleures pratiques en matière de développement, de sécurité et de performance.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Capacité à résoudre des problèmes complexes de manière créative.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Passion pour la technologie et désir d'apprendre continuellement.</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary ">Postuler</a>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>Stage pré-embauche</h3>
                        <ul>
                            <li><span>En tant que développeur Full-Stack, vous participerez à des projets novateurs, accumulerez une expérience précieuse et intégrerez une culture dédiée à l'apprentissage permanent. Nous sommes à la recherche de personnes créatives et engagées, désireuses d'apporter leur contribution à notre mission tout en perfectionnant leurs compétences dans un cadre collaboratif. Êtes-vous prêt(e) à propulser votre carrière dans le développement ?</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary ">Postuler</a>


                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>

    </section>
    <section id="contact" class="contact section">


        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Restons en contact ! N'hésitez pas à nous contacter pour toute demande ou simplement pour nous
                saluer.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Adresse</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Appelez-nous</h3>
                                <p>+212 638 898 188</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Envoyez-nous un email</h3>
                                <p>contact@tarmiz.ma</p>
                            </div>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="{{route('contact.send')}}" method="post" class="php-email-form" data-aos="fade-up"
                          data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Votre nom</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Votre email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Sujet</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field"
                                          required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Chargement...Votre message a été envoyé. Merci!</div>
                                <div class="error-message"></div>
                                <div class="sent-message"></div>

                                <button type="submit">Envoyer le message</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

</main>

<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Inscrivez-vous à notre newsletter</h4>
                    <p>Abonnez-vous à notre newsletter et recevez les dernières nouveautés sur nos produits et services !</p>
                    <form action="{{route('contact.send')}}" method="post" class="php-email-form">
                        @csrf
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                                                                             value="Subscribe"></div>
                        <div class="loading">Chargement...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre demande d'abonnement a bien été envoyée. Merci !</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{url('/')}}" class="d-flex align-items-center">
                    <span class="sitename">Tarmiz</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p class="mt-3"><strong>Téléphone:</strong> <span>+212 638 898 188</span></p>
                    <p><strong>Email:</strong> <span>contact@tarmiz.ma</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Follow Us</h4>
                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                <div class="social-links d-flex">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Tarmiz</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="{{url('/')}}">Tarmiz</a>
        </div>
    </div>

</footer>


<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


<div id="preloader"></div>


<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>


<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
