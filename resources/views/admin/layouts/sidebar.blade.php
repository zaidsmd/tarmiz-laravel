<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{route('home')}}" class="b-brand text-primary text-center">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{asset('img/logo-dark.png')}}" class="img-fluid logo-lg" style="max-width: 80%;" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{auth()->user()->name}}</h6>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                           href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <form action="{{route('admin.logout')}}" method="post">
                            @csrf
                            <div class="pt-3">
                                <a class="logout-btn">
                                    <i class="ti ti-power"></i>
                                    <span>Se déconnecter</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
{{--                <li class="pc-item ">--}}
{{--                    <a href="{{route('dashboard.index')}}" class="pc-link">--}}
{{--                        <span class="pc-micon">--}}
{{--                            <svg class="pc-icon">--}}
{{--                                <use xlink:href="#custom-status-up"></use>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        <span class="pc-mtext">Tableau de bord</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="pc-item ">
                    <a href="{{route('admin.messages.index')}}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-direct-inbox"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Messages</span>
                    </a>
                </li>
                <li class="pc-item ">
                    <a href="{{route('admin.messages.archived')}}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa fa-archive"></i>
                        </span>
                        <span class="pc-mtext">Messages archivés</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
