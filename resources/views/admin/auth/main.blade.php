<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>@yield('document-title') | {{config('app.name')}}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <script src="{{asset('js/plugins/jquery.js')}}" ></script>
    @vite([
    'resources/admin/scss/style.scss',
    'resources/admin/scss/style-preset.scss',
    'resources/admin/fonts/feather.css',
    'resources/admin/fonts/fontawesome.css',
    'resources/admin/fonts/material.css',
    'resources/admin/fonts/tabler-icons.min.css',
    'resources/admin/fonts/inter/inter.css',
    ])
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
           @yield('main-content')
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<!-- Required Js -->
<script src="{{asset('js/plugins/popper.min.js')}}"></script>
<script src="{{asset('js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/feather.min.js')}}"></script>
<script src="{{asset('js/custom-font.js')}}" ></script>

@vite(['resources/admin/js/pcoded.js'])

</body>
<!-- [Body] end -->

</html>
