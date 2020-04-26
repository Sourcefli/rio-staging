
@extends('layouts.website.master')

@section('title')
    Home Page
@endsection

@section('hero')
    @include('partials/website/_home-hero')
@endsection

@section('belowHero')
{{--    @include('components/_four-service-cards')--}}
{{--@include('partials/website/_three-column-two_cards-with-text-overview')--}}
@include('partials/website/_three-column-three-card-overview')
{{--@include('partials/website/_two-column-overviews')--}}
@endsection

@section('content')

    @include('components/_carriers-we-represent')
{{--    @include('partials/website/_full-width-imgbg')--}}

@endsection

@section('belowMain')
@endsection

@section('preFooter')
    @include('components/_single-button-cta')
@endsection

@section('extraJs')
    @parent
    <script>
        var urlParams;
        (window.onpopstate = function () {
            var match,
                pl     = /\+/g,  // Regex for replacing addition symbol with a space
                search = /([^&=]+)=?([^&]*)/g,
                decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
                query  = window.location.search.substring(1);

            urlParams = {};
            while (match = search.exec(query))
                urlParams[decode(match[1])] = decode(match[2]);
        })();
    </script>
@endsection



