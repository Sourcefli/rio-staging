<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- TRACKING CODES & SCHEMA.ORG if in PRODUCTION  --}}
        @if ( config('app.env') === 'production' )
            @include('partials/website/_async-tracking-master')
        @endif

        {{-- MASTER Open Graph File for all pages  --}}
        {{-- @include('../../partials/website/schema.org/_master-schema') --}}

        @if (config('app.env') === 'production')
            <script type="application/ld+json">
                {
                "@context": "https://schema.org/",
                "@type": "WebSite",
                "name": "Retirement Insurance Options",
                "url": "https://retirementinsuranceoptions.com"
                },
                {
                    "@context": "https://schema.org",
                    "@type": "InsuranceAgency",
                    "name": "American Senior Benefits Southwest",
                    "image": "https://retirementinsuranceoptions.com/img/seo/rio-main.png",
                    "@id": "",
                    "url": "https://retirementinsuranceoptions.com",
                    "telephone": "888-601-3580",
                    "priceRange": "$0-$200.00",
                    "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "6029 S Fort Apache Rd #130",
                    "addressLocality": "Las Vegas",
                    "addressRegion": "NV",
                    "postalCode": "89148",
                    "addressCountry": "US"
                    },
                    "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 36.079195,
                    "longitude": -115.299183
                    },
                    "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "09:00",
                    "closes": "17:00"
                    }
                }
            </script>
        @endif

        {{-- ASYNC TRACKING Injection --}}
        @yield('asyncContent')

        {{-- Social Meta Injection --}}
        @yield('socialMeta')

        {{-- TITLE Injection  --}}
        <title>{{ config('sourcefli.companyData.hqData.abbr') }} | @yield('title', 'American Senior Benefits')</title>

        <meta charset="utf-8" />
        <meta name="author" content="{{ config('sourcefli.devinfo.name') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/site.webmanifest" />
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#2b5797" />
        <meta name="theme-color" content="#ffffff" />
        <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
        {{-- <link rel="stylesheet" type="text/css" href="css/app.css" /> --}}
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <link rel="stylesheet" type="text/css" href="css/app.css" />

        {{-- smooth scroll everywhere--}}
        <style>
            * {
                scroll-behavior: smooth;
            }
        </style>

        {{-- EXTRA CSS Injection --}}
        @yield('extraCss')
    </head>

    {{-- Body Start --}}
    <body class="site-body style-v1">
        <header id="navbar-main" class="site-header header-s1 is-sticky">
            {{-- Navbar Injection --}}
            @include('partials/website/_navbar')

            {{-- Hero Injection --}}
            @yield('hero')
        </header>

        @yield('belowHero')

        @yield('content')

        @yield('belowMain')

        @yield('preFooter')

        @include('partials/website/_footer')

        @include('partials/website/_copyright')

        {{-- Master JS --}}
        <script src="js/jquery.bundle.js"></script>
        <script src="js/gmaps.js"></script>
        <script src="js/script.js"></script>
        <script src="js/app.js"></script>
        <script src="js/admin.js"></script>

        @yield('extraJs')

        {{-- SYNC TRACKING CODES if in PRODUCTION  --}}
        @if ( config('app.env') === 'production' )
            @include('partials/website/_sync-tracking-master')
        @endif
    </body>
</html>
