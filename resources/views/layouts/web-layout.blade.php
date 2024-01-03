<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



        <link rel="stylesheet" href="/css/icons.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->


        @wireUiScripts

        <link rel="stylesheet" href="/test/main.css">

        <link rel="stylesheet" href="/test/style.css">

        <script src="/js/js/vendor/jquery-3.3.1.min.js"></script>

        <link rel="stylesheet" href="/css/app3.css">
        <script src="/js/js/plugins.js"></script>
        <script src="/js/js/main.js" defer></script>

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-gray-100">



        <div class="pageWrapper">
            @livewire('web.header')
            <div id="page-content" >

                <main class="min-h-screen">
                    {{ $slot }}
                </main>
            </div>

            @livewire('web.footer')
        </div>







        <!-- Swiper JS -->


        @livewireScriptConfig






    </body>
</html>
