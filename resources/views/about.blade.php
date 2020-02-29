@extends('layouts.website.sidebar')

 {{-- SIDEBAR LAYOUT BLOCK SECTIONS
[ ] {{ asyncTracking }}
[ ] {{  Title }}
[ ] {{ extraCss }}
[ ] {{  hero }}
[ ] {{  content }}
[ ] {{  sidebar }}
[ ] {{ belowMain }}
[ ] {{ preFooter }}
[ ] {{ extraJs  ---}}

@php
    $pageData = config("sourcefli.siteData.aboutPageData")
@endphp

@section('title')
    About Us
@endsection

@section('hero')

    @include('partials/website/_hero-slim')
    @include('components/_cta-double-btn')

@endsection


@section('content')


    <div class="col-md-8">

        <h1 class="heading-lead">{{ option('about_section1_heading') }}</h1>

        <br>

        <h4><strong>{{ option('about_section1_paragraph1_title') }}</strong></h4>
        <p>{{ option('about_section1_paragraph1_paragraph') }}</p>

        <h4><strong>Informed.</strong></h4>
        <p>tempor incididunt ut labore et dolore magna eiusmod tempor dunt ut labore et dolore mane eiusmod tempor incididunt ut magna aliqua.</p>

        <h4><strong>Eager To Help.</strong></h4>
        <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>

        <hr>

        <h2>Meet our Team</h2>
        <p>Our team is our greatest asset and we continue to invest more and more time to train and provide them with as many resources as possible</p>
        <p><a href="/contact#contact-our-team" class="btn-link link-arrow-sm">Click here to know them</a></p>

    </div>
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-main')
@endsection

@section('belowMain')
    @include('components/_carriers-we-represent')
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection
