<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <link rel="stylesheet" href="/css/icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="/js/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/js/js/vendor/modernizr-3.6.0.min.js"></script>


    <!-- Including Javascript -->
    <script src="/js/js/bootstrap.min.js"></script>
    <script src="/js/js/plugins.js"></script>
    <script src="/js/js/popper.min.js"></script>
    <script src="/js/js/lazysizes.js"></script>
    <script src="/js/js/main.js" defer></script>

    @livewireStyles
</head>

<body class="bg-gray-100">




    <div x-data="{ open: false }" class="w-full text-gray-700 bg-cream">
        <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between py-6">
                <div class="relative md:mt-8">
                    <a href="#"
                        class="relative z-50 text-lg font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">Revempad</a>
                   <img src="/img/logo2.svg" class="hidden w-12" alt="">
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'hidden lg:flex': !open, 'block': open }" class="flex flex-col w-full md:flex-row md:items-center md:w-auto">
                <a class="px-4 py-2 mt-2 text-base bg-white rounded-lg lg:text-sm lg:bg-transparent md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#">Accueil</a>
                <a class="px-4 py-2 mt-2 text-base bg-transparent rounded-lg lg:text-sm md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#">Actualite</a>
                <a class="px-4 py-2 mt-2 text-base bg-transparent rounded-lg lg:text-sm md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#">Blog</a>
                    <a class="px-4 py-2 mt-2 text-base bg-transparent rounded-lg lg:text-sm md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                        href="#">Contact</a>
                <a class="px-4 py-2 mt-2 text-base bg-transparent rounded-lg lg:text-sm md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                    href="#">Apropos de nous </a>
                <a class="px-10 py-3 mt-2 text-base text-center text-gray-800 bg-white rounded-full lg:text-sm md:mt-8 md:ml-4"
                    href="#">Login</a>
                <a class="px-10 py-3 mt-2 text-base text-center text-white bg-yellow-500 rounded-full lg:text-sm md:mt-8 md:ml-4"
                    href="#">Faites un Don</a>
            </nav>
        </div>
    </div>









    <main>
        @yield('content')
    </main>




    <footer class="mt-32" style="background-color: rgba(37, 38, 65, 1);">
        <div class="max-w-lg mx-auto">
            <div class="flex items-center justify-center px-20 py-12 text-white sm:px-36">
                <div class="relative">
                    <h1 class="relative z-50 pr-5 text-xl font-bold">Skilline</h1>
                    <svg class="absolute z-40 w-11 h-11 -top-2 -left-3" viewBox="0 0 79 79" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z"
                            stroke="#26C1F2" stroke-width="2" />
                    </svg>
                </div>
                <span class="py-2 pl-5 text-base font-semibold border-l border-gray-500 lg:text-sm">Virtual Class for Zoom</span>
            </div>
            <div class="pt-5 pb-16 text-center">
                <label class="font-semibold text-gray-300">Subscribe to get our Newsletter</label>
                <div class="flex flex-col justify-center px-5 mt-3 space-y-3 sm:px-0 sm:flex-row sm:space-x-3 sm:space-y-0">
                    <input type="email" placeholder="Your Email"
                        class="py-2 pl-5 bg-transparent border border-gray-400 rounded-full">
                    <button type="submit"
                        class="w-40 px-5 py-2 mx-auto font-semibold text-white rounded-full sm:w-auto sm:mx-0"
                        style="background: linear-gradient(105.5deg, #545AE7 19.57%, #393FCF 78.85%);">Subscribe</button>
                </div>
            </div>
            <div class="flex items-center justify-center text-base text-gray-400 lg:text-sm">
                <a href="" class="pr-3">Careers</a>
                <a href="" class="px-3 border-l border-gray-400">Privacy</a>
                <a href="" class="pl-3 border-l border-gray-400">Terms & Conditions</a>
            </div>
            <div class="text-center text-white">
                <p class="my-3 text-base text-gray-400 lg:text-sm">&copy; 2021 Class Technologies Inc. </p>
                <div class="py-3 tracking-wide">
                    <p>Code By <span class="font-semibold">mhaecal</span></p>
                    <p>UI/UX By <span class="font-semibold">Irvan Moses</span></p>
                </div>
            </div>
        </div>
    </footer>










    @livewireScriptConfig





</body>

</html>
