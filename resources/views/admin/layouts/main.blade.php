<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>@yield('document-title') | {{config('app.name')}}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
          content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon"> <!-- [Font] Family -->
    <link rel="stylesheet" href="{{asset('plugins/notifier.css')}}">
    <script src="{{asset('js/plugins/jquery.js')}}"></script>
    @vite([
    'resources/admin/scss/style.scss',
    'resources/admin/scss/style-preset.scss',
    'resources/admin/fonts/feather.css',
    'resources/admin/fonts/fontawesome.css',
    'resources/admin/fonts/material.css',
    'resources/admin/fonts/tabler-icons.min.css',
    'resources/admin/fonts/inter/inter.css',
    ])
    @stack('styles')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
      data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        @yield('breadcrumb')
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">@yield('page-title')</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        @yield('main-content')
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">&copy; Copyright <strong><span>Amassis</span></strong>. All Rights Reserved</p>
            </div>
            <div class="col-auto my-1">
                <div class="credits">
                    Created by <a target="_blank" href="https://www.linkedin.com/in/zaid-samadi-b95281217/">Zaid
                        samadi</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="{{asset('js/plugins/popper.min.js')}}"></script>
<script src="{{asset('js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/feather.min.js')}}"></script>
<script src="{{asset('js/custom-font.js')}}"></script>
<script src="{{asset('js/plugins/notifier.js')}}"></script>
<script src="{{asset('js/plugins/sweetalert2.all.min.js')}}"></script>

<script>
    const __logo = '{{asset('images/logo-white.svg')}}';
    const __logo_dark = '{{asset('images/logo-dark.svg')}}';
    const __csrf_token = '{{csrf_token()}}';
    var __theme = '{{session()->get('theme') ?? 'light'}}'
    @if(session()->has('success'))
    notifier.show('{{session()->get('success')}}', 'Action reussie', 'success', '{{asset('images/notification/ok-48.png')}}', 4000);
    @endif
    @if(session()->has('warning'))
    notifier.show('{{session()->get('warning')}}', '', 'warning', '{{asset('images/notification/medium_priority-48.png')}}', 4000);
    @endif
    @if(session()->has('danger'))
    notifier.show('{{session()->get('danger')}}', '', 'danger', '{{asset('images/notification/high_priority-48.png')}}', 4000);
    @endif
    @if(session()->has('info'))
    notifier.show('{{session()->get('info')}}', '', 'info', '{{asset('images/notification/survey-48.png')}}', 4000);
    @endif
</script>
@vite(['resources/admin/js/pcoded.js','resources/admin/js/app.js'])
@stack('scripts')
</body>
<!-- [Body] end -->
</html>
