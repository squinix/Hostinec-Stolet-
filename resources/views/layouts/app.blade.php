<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>
    <meta name="description" content="Hostinec Stoletá se zaměřuje na tradiční českou kuchyni. Hosté mohou ochutnat i naše vyhlášené speciality, jako například žebra na medu, cheeseburger s hranolkami a nebo domácí dezerty. Každý den pro vás nabízíme polední menu. Pestrému výběru nápojů vévodí správně načepované a vychlazené pivo Pilsner Urquell a nebo bohatá vinotéka pečlivě vybraným moravských vín. To vše v krášně malebném hostinci v centru města Kolína.">
    <meta name=”robots” content="none">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        .default {
            background: url("/storage/uploads/DSC_2144.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .denniMenu {
            background: url("/storage/uploads/IMG_6604.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .jidelniListek {
            background: url("/storage/uploads/IMG_6654 (1).jpg");
            background-position: 50% 35%;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .galerie {
            background: url("/storage/uploads/DSC_2443.jpg");
            background-position: 50% 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .o_nas {
            background: url("/storage/uploads/DSC_2151.jpg");
            background-position: 50% 60%;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .active {
            border: solid rgb(0,0,0,0.1) 1px;
        }

        @media screen and (max-width: 992px) {
            .scrollBg {
                background-attachment: scroll;
            }
        }

        .progress-container {
            width: 100%;
            height: 2px;
            background: transparent;
        }

        .progress-bar {
            height: 2px;
            background: saddlebrown;
            width: 0%;
        }

        .hr {
            border-color: rgb(0,0,0,0.3);
            width: 30%;
        }

        button a svg {
            fill: white;
        }
    </style>
</head>
<body>
    <div id="app">

        <div class="w-full scrollBg {{ $headerClass ?? 'default' }}">
            <div class="bg-black bg-opacity-75 h-screen sm:h-128 mx-auto flex justify-center items-center">
                <div class="sticky top-0">
                    <img src="/storage/uploads/stoleta_logo_white.png" alt="hostinec-stoleta-logo" width="250px">
                </div>
            </div>
        </div>

        <nav class="sticky top-0 bg-white shadow">
            <div class="container m-auto">
                <div class="flex items-center justify-between">
                    <div class="mx-6 animate__animated animate__slideInLeft">
                        <a href="{{ route('hlavni-strana') }}">
                            <img src="/storage/uploads/stoleta_logo.png" alt="hostinec-stoleta-logo" width="70px">
                        </a>
                    </div>
                    <div class="hidden sm:inline-block animate__animated animate__slideInRight">
                        <ul>
                            <li class="inline-block align-middle px-4 mx-4 py-2 {{ (request()->is('/')) ? 'active' : '' }}">
                                <a href="{{ route('hlavni-strana') }}" class="font-bold text-sm uppercase">
                                    Denní menu
                                </a>
                            </li>
                            <li class="inline-block align-middle px-4 mx-4 py-2 {{ (request()->is('jidelni-listek')) ? 'active' : '' }}">
                                <a href="{{ route('jidelni-listek') }}" class="font-bold text-sm uppercase">
                                    Jídelní lístek
                                </a>
                            </li>
                            <li class="inline-block align-middle px-4 mx-4 py-2 {{ (request()->is('galerie')) ? 'active' : '' }}">
                                <a href="{{ route('galerie') }}" class="font-bold text-sm uppercase">
                                    Galerie
                                </a>
                            </li>
                            <li class="inline-block align-middle px-4 mx-4 py-2 {{ (request()->is('o-nas')) ? 'active' : '' }}">
                                <a href="{{ route('o-nas') }}" class="font-bold text-sm uppercase">
                                    O nás
                                </a>
                            </li>
                            <li class="inline-block align-middle px-4 mx-4 py-2 {{ (request()->is('kontakt')) ? 'active' : '' }}">
                                <a href="{{ route('kontakt') }}" class="font-bold text-sm uppercase">
                                    Kontakt
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="inline-block sm:hidden mx-6 animate__animated animate__slideInRight">
                        <button type="button" onclick="toggleNav()">
                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18px" height="24px">
                                <path d="M 0 2 L 0 4 L 24 4 L 24 2 Z M 0 11 L 0 13 L 24 13 L 24 11 Z M 0 20 L 0 22 L 24 22 L 24 20 Z"/>
                            </svg>    
                        </button>
                    </div>
                </div>
                <div id="togglableNav" class="hidden my-4 animate__animated animate__slideInLeft">
                    <ul>
                        <li class="block align-middle px-4 mx-4 py-2 {{ (request()->is('/')) ? 'active' : '' }}">
                            <a href="{{ route('hlavni-strana') }}" class="font-bold text-sm uppercase">
                                Hlavní strana
                            </a>
                        </li>
                        <li class="block align-middle px-4 mx-4 py-2 {{ (request()->is('jidelni-listek')) ? 'active' : '' }}">
                            <a href="{{ route('jidelni-listek') }}" class="font-bold text-sm uppercase">
                                Jídelní lístek
                            </a>
                        </li>
                        <li class="block align-middle px-4 mx-4 py-2 {{ (request()->is('o-nas')) ? 'active' : '' }}">
                            <a href="{{ route('o-nas') }}" class="font-bold text-sm uppercase">
                                O nás
                            </a>
                        </li>
                        <li class="block align-middle px-4 mx-4 py-2 {{ (request()->is('kontakt')) ? 'active' : '' }}">
                            <a href="{{ route('kontakt') }}" class="font-bold text-sm uppercase">
                                Kontakt
                            </a>
                        </li>
                    </ul>    
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div> 
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="w-full p-4">
            <div class="bg-gray shadow">
                <div class="container p-8 sm:p-0">
                    <div class="block sm:grid grid-cols-3 gap-4 pt-32">
                        <div class="bg-gray-900 px-10 m-auto sm:m-0 w-56 pb-16 sm:pb-0">
                            <img src="/storage/uploads/stoleta_logo_white.png" alt="Hostinec stoletá logo">
                        </div>
                        <div class="my-12 sm:my-0 bg-gray-900">
                            <h2 class="text-white font-thin text-xl uppercase">
                                Odkazy
                            </h2>
                            <hr class="hr my-4">
                            <ul class="text-white">
                                <li>
                                    <span class="font-thin text-lg mr-2">
                                        >
                                    </span>
                                    <a href="{{ route('hlavni-strana') }}" class="font-thin text-lg">
                                        Hlavní strana
                                    </a>
                                </li>
                                <li class="pt-4">
                                    <span class="font-thin text-lg mr-2">
                                        >
                                    </span>
                                    <a href="{{ route('jidelni-listek') }}" class="font-thin text-lg">
                                        Jídelní lístek
                                    </a>
                                </li>
                                <li class="pt-4">
                                    <span class="font-thin text-lg mr-2">
                                        >
                                    </span>
                                    <a href="{{ route('o-nas') }}" class="font-thin text-lg">
                                        O nás
                                    </a>
                                </li>
                                <li class="pt-4">
                                    <span class="font-thin text-lg mr-2">
                                        >
                                    </span>
                                    <a href="{{ route('kontakt') }}" class="font-thin text-lg">
                                        Kontakt
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="my-12 sm:my-0 bg-gray-900">
                            <h2 class="text-white font-thin text-xl uppercase">
                                Kontakt
                            </h2>
                            <hr class="hr my-4">
                            <ul class="text-white font-thin text-lg">
                                <li style="display: table;">
                                    <span style="width: 40px;display: table-cell;">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"/>
                                            <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"/>
                                        </svg>    
                                    </span>
                                    <span>
                                        Hostinec Stoletá, Kutnohorská 33, Kolín
                                    </span>
                                </li>
                                <li class="pt-4" style="display: table;">
                                    <span style="width: 40px;display: table-cell;">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                        </svg>    
                                    </span>
                                    <span>
                                        +420 721 181 007
                                    </span>
                                </li>
                                <li class="pt-4" style="display: table;">
                                    <span style="width: 40px;display: table-cell;">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                        </svg>    
                                    </span>
                                    <span class="break-all">
                                        hostinecstoleta@gmail.com
                                    </span>
                                </li>
                                <li class="pt-4" style="display: table;">
                                    <span style="width: 40px;display: table-cell;">
                                        <a href="https://www.facebook.com/HostinecStoleta" class="uppercase text-xs font-black text-white">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-4 h-4">
                                                <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"/>
                                            </svg>
                                        </a> 
                                    </span>
                                    <span class="break-all">
                                        Hostinec Stoletá
                                    </span>
                                </li>
                                <li class="pt-4" style="display: table;">
                                    <span style="width: 40px;display: table-cell;">
                                        <a href="https://www.instagram.com/hostinec_stoleta/" class="uppercase text-xs font-black text-white">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="fill-current w-4 h-4">
                                                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"/>
                                            </svg>
                                        </a>  
                                    </span>
                                    <span class="break-all">
                                        @hostinecstoleta
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="w-full mt-12" style="border-color: rgb(0,0,0,0.3);">
                    <div class="py-6">
                        <p class="text-center text-white text-lg font-thin">
                            <small>&copy; Copyright {{ now()->year }}, Hostinec Stoletá</small>
                        </p>
                    </div>
                    
                </div>
            </div>
        </footer>
    </div>

    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {myFunction()};
        
        function myFunction() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("myBar").style.width = scrolled + "%";
        }

        function toggleNav() {
            var contentId = document.getElementById("togglableNav");

            contentId.style.display == "block" ? contentId.style.display = "none" : 
            contentId.style.display = "block"; 
        }
    </script>
</body>
</html>
