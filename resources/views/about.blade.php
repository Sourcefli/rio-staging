@extends('layouts.website.sidebar')

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
        <h1 class="heading-lead">{{ $sectionOneHeading->heading }}</h1>
        <br>
        <h4>
            <strong>{{ $sectionOneHeading->subheading }}</strong>
        </h4>
        @foreach($sectionOneContent as $sectionOne)
            @if($loop->iteration === 'last')
                <hr>
                <h2>{{ $sectionOne->heading }}</h2>
                <p>{{ $sectionOne->body }}</p>
                <p><a href="{{ route('contactPage') }}#contact-our-team" class="btn-link link-arrow-sm">Click here to learn more</a></p>
            @else
                <h4>{{ $sectionOne->heading }}</h4>
                <p>{{ $sectionOne->body }}</p>
            @endif
        @endforeach
        <hr>
        @foreach($sectionTwoContent as $sectionTwo)
            <h2>{{ $sectionTwo->heading }}</h2>
            <p>{{ $sectionTwo->body }}</p>
            <p><a href="{{ $sectionTwo->href }}" class="btn-link link-arrow-sm">{{ $sectionTwo->href_text }}</a></p>
            <hr>
        @endforeach
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
