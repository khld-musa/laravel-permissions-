<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
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
    
    
    </head>
    <body>

<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section>
        <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
            <div class="container z-10">
                <div class="flex flex-wrap mt-0 -mx-3">
                    <div
                        class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                <h3 class="relative z-10 font-bold text-transparent bg-gradient-cyan bg-clip-text">
                                    Reset password</h3>
                                <p class="mb-0">Here you can reset your password! <br />Enter your email and your new
                                    password below!</p>
                            </div>

                            <div class="flex-auto p-6">

                                @if (Session::has('email'))
                                <div id="alert"
                                    class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-dark-gray border-slate-100">
                                    {{ Session::get('email') }}
                                    <button type="button" onclick="alertClose()"
                                        class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                        <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                                    </button>
                                </div>

                                @endif

                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            
                                    <label for="email"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Email</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="email" type="email"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                            required autofocus />
                                        @error('email')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <label for="password"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Password</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="password" type="password" id="password"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="New password" aria-label="Password"
                                            aria-describedby="password-addon" required />
                                        @error('password')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <label for="password_confirmation"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Password
                                        confirmation</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="password_confirmation" type="password"
                                            id="password_confirmation"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Confirm new password" aria-label="Password"
                                            aria-describedby="password-addon" required />
                                        @error('password_confirmation')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                            Reset password</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                        <div
                            class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                            <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                style="background-image: url('../assets/img/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>
</main>

<body>