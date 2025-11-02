<!DOCTYPE html>
<html lang="en" data-mode="light">
<head>
    <meta charSet="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ asset('_next/static/css/574f65cbccb805de.css') }}" data-precedence="next"/>
    <link rel="stylesheet" href="{{ asset('_next/static/css/72c877754fc63e9f.css') }}" data-precedence="next"/>
    <script src="{{ asset('_next/static/chunks/webpack-364a2b9f875667ce.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/fd9d1056-9708d34a585ec51b.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/2117-b4b7f169af1286c5.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/362-166535862c364438.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/2972-8f9ff89839b5fab8.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/7859-a55a28033dbef6ec.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/942-1696492ae1471daa.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/2663-b3219173308b0b98.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/app/not-found-772c83470a4de991.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/app/[countryCode]/(main)/not-found-4b6862d64bfa2e81.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/5878-3ce7b8da53722c43.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/1403-751a2b6fed3e27f0.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/7835-144b90fefee74c91.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/1064-4f3c2199e3522a20.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/app/[countryCode]/(main)/page-0293c0e9999ba2e5.js') }}" async=""></script>
    <script src="{{ asset('_next/static/chunks/app/[countryCode]/(main)/layout-9ec0dd9ac30fcf21.js') }}" async=""></script>
    <title>@yield('title', 'Profile - Myth of Yggdrasil')</title>
    <meta name="description" content="@yield('description', 'View and edit your Myth of Yggdrasil profile.')"/>
    <meta property="og:title" content="@yield('og_title', 'Profile - Myth of Yggdrasil')"/>
    <meta property="og:description" content="@yield('og_description', 'View and edit your Myth of Yggdrasil profile.')"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="1600"/>
    <meta property="og:image:height" content="900"/>
    <meta property="og:image" content="https://mythofyggdrasil.com/opengraph-image.jpg?443c03a007878a5d"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('twitter_title', 'Myth of Yggdrasil')"/>
    <meta name="twitter:description" content="@yield('twitter_description', 'Explore Myth Of Yggdrasil, a refreshed classic MMORPG adventure.')"/>
    <meta name="twitter:image:type" content="image/jpeg"/>
    <meta name="twitter:image:width" content="1600"/>
    <meta name="twitter:image:height" content="900"/>
    <meta name="twitter:image" content="https://mythofyggdrasil.com/twitter-image.jpg?443c03a007878a5d"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T9LNLHZ5');
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One&amp;display=swap" rel="stylesheet"/>
    <script src="{{ asset('_next/static/chunks/polyfills-42372ed130431b0a.js') }}" noModule=""></script>
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9LNLHZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <main class="relative">
        <div class="flex flex-col min-h-screen">
            <!-- Header -->
            <div class="top-0 inset-x-0 z-10 group">
                <header class="relative h-20 mx-auto border-b duration-200 bg-white border-ui-border-base">
                    <nav class="content-container txt-xsmall-plus text-ui-fg-subtle flex items-center justify-between w-full h-full text-small-regular">
                        <div class="flex-1 basis-0 gap-4 h-full flex items-center">
                            <!-- Language Flags -->
                            <div class="flex gap-2 items-center">
                                <a href="/" class="hover:opacity-80 transition p-2 rounded-md {{ App::getLocale() == 'pt' ? 'border' : '' }}" aria-label="Switch to BR">
                                    <img alt="Brazil Flag" loading="lazy" width="24" height="24" decoding="async" src="https://flagcdn.com/w40/br.png" style="color: transparent;">
                                </a>
                                <a href="/us" class="hover:opacity-80 transition p-2 rounded-md {{ App::getLocale() == 'en' ? 'border' : '' }}" aria-label="Switch to US">
                                    <img alt="USA Flag" loading="lazy" width="24" height="24" decoding="async" src="https://flagcdn.com/w40/us.png" style="color: transparent;">
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center h-full">
                            <a class="txt-compact-xlarge-plus hover:text-ui-fg-base uppercase mr-7" data-testid="nav-store-link" href="{{ url('/') }}">
                                <img alt="Myth of Yggdrasil Logo" loading="lazy" width="70" height="70" decoding="async" data-nimg="1" style="color:transparent" src="{{ asset('img/moy_fit2.png') }}"/>
                            </a>
                        </div>
                        <div class="flex items-center gap-x-6 h-full flex-1 basis-0 justify-end">
                            <div class="hidden small:flex items-center gap-x-6 h-full">
                                <a class="hover:text-ui-fg-base" data-testid="nav-account-link" href="{{ url('/account') }}">Global Account</a>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
            <!-- Main Content -->
            <main class="flex-grow bg-ui-bg-subtle">
                @yield('content')
            </main>
            <!-- Footer -->
            <footer class="w-full bg-[#5B719F] text-white py-16">
                <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-center gap-8 px-6 md:px-12">
                    <div class="flex flex-col items-center text-left">
                        <div class="flex justify-center mb-4">
                            <img alt="Myth of Yggdrasil Logo" loading="lazy" width="130" height="130" decoding="async" data-nimg="1" style="color:transparent" src="{{ asset('img/moy_fit2.png') }}"/>
                        </div>
                        <div class="text-gray-200 text-sm ">
                            <p class="mb-1/2">Made with <span>🤍</span> for all community.</p>
                            <p class="txt-medium font-normal font-sans">Copyright � Myth of Yggdrasil</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-10"></div>
                    <div class="flex flex-col items-start text-left">
                        <h3 class="font-bold text-xl mb-4">Myth of Yggdrasil</h3>
                        <ul class="space-y-2">
                            <li><a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Discord</a></li>
                            <li><a href="https://www.youtube.com/watch?v=f2H-dw7u16o" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Youtube</a></li>
                            <li><a href="https://www.instagram.com/myth.yggdrasil/" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Instagram</a></li>
                            <li><a href="https://www.tiktok.com/@mythofyggdrasil" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">TikTok</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <script src="{{ asset('_next/static/chunks/webpack-364a2b9f875667ce.js') }}" async=""></script>
    <!-- Additional scripts as needed -->
</body>
</html>
