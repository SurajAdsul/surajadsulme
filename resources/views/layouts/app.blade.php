<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suraj Adsul</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .blog-post-color {
            color: #3d4852;
        }

        .block {
            display: block;
        }

        .pin {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
        .mobile-menu-block{
            display: block !important;
        }

        .mobile-menu-hidden{
            display: none !important;
        }

        @media (min-width: 768px){
            .mobile-menu-hidden-res {
                display: none!important;
            }
        }

        button:focus{
            outline: none !important;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109655284-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109655284-2');
    </script>
</head>
<body>


<div id="app" class="py-8 lg:py-16 px-6 md:px-16 lg:px-24">
    <!--Nav bar-->
    <div class="relative z-20 flex justify-between items-center">
        <div class="flex md:block lg:flex items-center max-w-full">
            <div class="mb-0 md:mb-4 lg:mb-0 flex flex-no-shrink pr-4 md:pr-6 lg:pr-12">
                <a href="/" class="flex items-center no-underline"><img
                            src="https://avatars.githubusercontent.com/u/2919738" alt=""
                            class="h-10 w-10 md:h-12 md:w-12 lg:h-20 lg:w-20 rounded-full"></a>
            </div>
            <div>
                <a href="/"
                   class="block text-gray-800 no-underline font-bold text-xl lg:text-3xl font-extrabold leading-none lg:leading-tight">Suraj
                    Adsul</a>
                <div class="hidden md:flex mt-3 lg:mt-4 uppercase tracking-widest text-xs spaced-x-6 ">
                    <a href="/"
                       class="{{ Route::currentRouteNamed('articles') ? 'text-black' : 'text-gray-500' }} font-semibold no-underline hover:text-black mr-6">
                        Articles</a>
                    <a href="/about/me"
                       class="{{ Route::currentRouteNamed('aboutme') ? 'text-black' : 'text-gray-500' }}  font-semibold no-underline hover:text-black mr-6">
                        About Me</a>
                    <a href="/screencasts"
                       class="{{ Route::currentRouteNamed('screencasts') ? 'text-black' : 'text-gray-500' }} font-semibold no-underline hover:text-black mr-6">
                        Screencasts</a>
                    <a href="/projects"
                       class="{{ Route::currentRouteNamed('projects') ? 'text-black' : 'text-gray-500' }} font-semibold no-underline hover:text-black mr-6">
                        Projects</a>
                    <a href="/journal"
                       class="{{ Route::currentRouteNamed('journal') ? 'text-black' : 'text-gray-500' }} font-semibold no-underline hover:text-black mr-6">
                        Journal</a>
                </div>
            </div>
        </div>
        <div class="md:hidden">
            <button class="block" @click="toggleMenu">
                <svg style="display: block;" :class="menuOpen ? 'mobile-menu-hidden' : 'mobile-menu-block'" class="block text-black h-6 w-6"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
                <svg style="display: none;" :class="menuOpen ? 'mobile-menu-block' : 'mobile-menu-hidden'" class="text-black h-6 w-6"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
                </svg>
            </button>
        </div>
    </div>

    <!--mobile nav-->
    <div style="display: none; !important;" :class="menuOpen ? 'mobile-menu-block' : 'mobile-menu-hidden'" class="mobile-menu-hidden-res z-10 bg-white fixed pin pt-24">
        <div class="spaced-y-8 overflow-y-auto pt-6 pb-8 px-12 max-h-full overflow-y-auto">
            <a href="/" class="block text-gray-800 font-bold no-underline mb-8">Articles</a>
            <a href="/about/me" class="block text-gray-800 font-bold no-underline mb-8">About me</a>
            <a href="/screencasts" class="block text-gray-800 font-bold no-underline mb-8">Screencasts</a>
            <a href="/projects" class="block text-gray-800 font-bold no-underline mb-8">Projects</a>
            <a href="/journal" class="block text-gray-800 font-bold no-underline mb-8">Journal</a>
        </div>
    </div>

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.min.js"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            menuOpen: false
        },
        methods: {
            toggleMenu: function () {
                if (this.menuOpen) {
                    this.menuOpen = false
                    document.body.classList.remove('scrolling-auto', 'overflow-hidden', 'fixed', 'pin-x')
                } else {
                    this.menuOpen = true
                    document.body.classList.add('scrolling-auto', 'overflow-hidden', 'fixed', 'pin-x')
                }
            }
        }
    })
</script>
</body>
</html>