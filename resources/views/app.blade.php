<!DOCTYPE html>
<html lang=en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>The Startup Group</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Inter:wght@400;500;600;700;800;900&display=fallback">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body class="font-inter antialiased bg-gray-900 text-gray-200 tracking-tight">
        <!-- Page wrapper -->
        <div class="flex flex-col min-h-screen overflow-hidden">

            <!-- Site header -->
            @include('partials.header')

            <!-- Page content -->
            <main class="flex-grow">

                <!-- Page illustration -->
                <div class="relative max-w-6xl mx-auto h-0 pointer-events-none" aria-hidden="true">
                    @include('partials.page-illustration')
                </div>
                
                <!-- Page sections -->
                <!-- <%= require('html-loader!./partials/features-home.html') %> -->

                @yield('content')
            </main>

            <!-- Site footer -->
            @include('partials.footer')
        </div>
    </body>
</html>
