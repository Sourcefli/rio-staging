@extends('layouts.website.sidebar-contact')


@php
    $pageData = config("sourcefli.siteData");
    $navData = config("sourcefli.siteData.nav.items");
    $teamData = config("sourcefli.asbTeam");
    $bestTime = config("sourcefli.formData.contact.bestTime");
    $selections = config("sourcefli.formData.quotes.selections");
    $referredBy = config("sourcefli.formData.quotes.referredBy");
@endphp

@section('title')
    Get A Quote
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection


@section('content')
    <div class="quote-list col-md-7 res-m-bttm-lg">
        <p class="lead">
            Please <a href="{{ route('contactPage') }}">contact us</a> with questions or to set-up an appointment to speak with one of our agents by <a href="{{ getAcuityLink() }}" target="_blank">clicking here</a>.
        </p>
        <span class="gaps size-xs"></span>
        <div class="quote-group">

            {{-- !! FIX FORM HANDLING !! --}}
            @include('partials.forms.quote-form')
        </div>
    </div>
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-contact')
@endsection

@section('belowMain')
    @include('components/_carriers-we-represent')
    @include('partials/website/_team-contact-details') {{-- =====>> **Doesn't include Edwards --}}
    {{-- @include('partials/website/_team-v2-details') =====>> Needs Responsiveness --}}
@endsection

@section('preFooter')
    {{-- ?  --}}
@endsection
