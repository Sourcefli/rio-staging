
@extends('layouts.website.master')

@section('title')
    Home Page
@endsection

@section('hero')
    @include('partials/website/_home-hero')
@endsection

@section('belowHero')
    @include('components/_four-service-cards')
@endsection

@section('content')
    
    <div class="section section-content section-pad bg-light">
        <div class="container">
            <div class="content row">
            
                <div class="row">
                    <div class="col-sm-7 res-s-bttm">
                        <h2>The Coverage You're Looking For...</h2>
                        <h4>The Advantage of Experience</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercation ullamco.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
                    </div>
                    <div class="col-sm-5 pad-l-md">
                        <img src="img/services/opt/opt-retirement-savings.jpg" alt="">
                    </div>
                </div>
                <div class="gaps size-lg"></div>
                <div class="row">
                    <div class="col-sm-7 res-s-bttm">
                        <h2>The Advantage of May Options</h2>
                        <h4>One agency for every concern</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercation ullamco.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
                        <h6>For a complete list of services, <a href="{{ config('sourcefli.siteData.nav.items.services.uri') }}">click here</a> or <a href="{{ config('sourcefli.siteData.nav.quote.uri') }}">get a quote now.</a></h6>
                    </div>
                    <div class="col-sm-5 pad-l-md">
                        <img src="img/services/opt/opt-mind-the-gap.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection

@section('belowMain')
    @include('components/_carriers-we-represent')
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



