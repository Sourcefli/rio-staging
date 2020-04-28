<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if(env('APP_ENV') === 'PRODUCTION')
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-N6GRK23');
        </script>
        <!-- End Google Tag Manager -->
    @endif

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

    <link href="css/backend-main.css" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        .gradient {
            background: linear-gradient(45deg, #667eea, #ed64a6);
        }
    </style>
</head>

<body class="antialiased bg-gray-200">

@if(env('APP_ENV') === 'PRODUCTION')
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6GRK23" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@endif

    @yield('content')

    <script src="js/backend-main.js"></script>

    @yield('javascript')

</body>

</html>
