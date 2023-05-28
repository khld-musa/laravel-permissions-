 <!DOCTYPE html>

@if (\Request::is('rtl'))
<html lang="ar" dir="rtl">
@else
<html lang="en">
@endif

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @if (env('IS_DEMO'))
        <meta name="keywords" content="creative tim, updivision, html dashboard, TALL, Tailwind, Alpine.js, Livewire, html css dashboard TALL, soft ui dashboard TALL, soft ui dashboard TALL, soft ui dashboard, TALL soft ui dashboard, soft ui admin, TALL dashboard, TALL dashboard, TALL admin, web dashboard, Taildwind dashboard TALL, css3 dashboard, Tailwind admin, soft ui dashboard Tailwind, frontend, responsive Tailwind dashboard, soft ui dashboard, soft ui TALL dashboard" />
        <meta name="description" content="A free full stack app with dozens of UI components powered by Tailwind, Alpine.js, Laravel and Livewire" />
        <meta itemprop="name" content="Soft UI Dashboard TALL by Creative Tim & UPDIVISION " />
        <meta itemprop="description" content="A free full stack app with dozens of UI components powered by Tailwind, Alpine.js, Laravel and Livewire" />
        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/683/original/soft-ui-dashboard-tall.jpg" />
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="@creativetim " />
        <meta name="twitter:title" content="Soft UI Dashboard TALL by Creative Tim & UPDIVISION" />
        <meta name="twitter:description" content="A free full stack app with dozens of UI components powered by Tailwind, Alpine.js, Laravel and Livewire" />
        <meta name="twitter:creator" content="@creativetim" />
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/683/original/soft-ui-dashboard-tall.jpg" />
        <meta property="fb:app_id" content="655968634437471" />
        <meta property="og:title" content="Soft UI Dashboard TALL by Creative Tim & UPDIVISION" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.creative-tim.com/live/soft-ui-dashboard-tall" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/683/original/soft-ui-dashboard-tall.jpg" />
        <meta property="og:description" content="A free full stack app with dozens of UI components powered by Tailwind, Alpine.js, Laravel and Livewire" />
        <meta property="og:site_name" content="Creative Tim" />
    @endif

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png" />
    <title>Soft UI Dashboard TALL by Creative Tim & UPDIVISION</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
    <!-- AlpineJS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>

    <!-- Main Styling -->
    <link href="{{ asset('assets') }}/css/styles.css?v=1.0.3" rel="stylesheet" />
        
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> 


