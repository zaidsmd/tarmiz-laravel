<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

{{--        <h1 class="logo"><a href="{{url('/')}}">Amassis<span>.</span></a></h1>--}}
         <a href="{{route('home')}}" class="logo"><img src="{{asset('img/logo2.png')}}" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                <li class="dropdown"><a class="scrollto" href="#apropos"><span>À propos</span> <i class="bi bi-chevron-down"></i></a>
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
                        class="scrollto"
                        href="#nosactivites"><span>Nos activités</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('nosactivites')}}/#aide">Aide Sanitaire</a></li>
                        <li><a href="{{route('nosactivites')}}/#solidarite">Solidarité et Inclusion Sociale</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="#projets-et-realisations">Projets et réalisations</a></li>
                <li><a class="nav-link scrollto " href="#nos-partenaires">Nos partenaires</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
