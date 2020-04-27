@extends('layouts/website/sidebar')


@section('title')
    ASBsw | {!! $pageContent['bannerData']->heading !!}
@endsection

@section('hero')
    @include('partials/website/_hero-services')
@endsection

{{-- VARs AVAILABLE ON THE MAIN $pageContent Variable --}}
{{-- Access each VARs as an array, then a class prop
{{-- e.g. $pageContent['bannerData']->heading --}}
{{--'bannerData',--}}
{{--'commonQuestionsData',--}}
{{--'serviceOptionsData',--}}
{{--'serviceScenariosData',--}}
{{--'path'--}}
@section('content')

    <div class="col-md-8">
        @include('partials.website.service-details-body')
        @include('components._cta-double-btn')
    </div>

@endsection

@section('sidebar')
    @include('partials/website/_sidebar-service-details')
@endsection

@section('belowMain')

@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection


@section('extraJs')

@endsection
