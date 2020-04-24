{{--Available VARs:--}}
{{--$carriers--}}
{{--Data Source: CarrierDataComposer (not being passed from controller)--}}

@extends('layouts.website.master')

@section('title')
    Client Resources
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('content')
<div class="section section-contents section-pad">
    <div class="container">
        <div class="content row">
        @foreach($carriers as $carrier)
            @if($loop->iteration === 1)
                <div class="row row-client-info">
            @endif
                <div class="col-sm-3 col-xs-6 res-s-bttm">
                    <div class="client-info">
                        <p>
                            <img src="{{ $carrier->smImg }}" alt="{{ $carrier->name }}">
                        </p>
                        <p>
                            <strong>General Support:</strong><br>
                            {{ $carrier->generalSupportPhone }}<br>
                            <strong>Client Support:</strong><br>
                            {{ $carrier->customerSupportPhone }}<br>
                            <a href="{{ $carrier->homePageUrl }}" target="_blank" class="btn-link">
                                Visit Their Home Page
                            </a>
                        </p>
                    </div>
                </div>
            @if($loop->iteration === 4)
                </div>
                <div class="row row-client-info">
            @endif
        @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection
{{--<div class="section section-contents section-pad">--}}
{{--    <div class="container">--}}
{{--        <div class="content row">--}}
{{--            <div class="row row-client-info">--}}
{{--                        <p><img src="{{ $carrierData["aetna"]["smImg"] }}" alt="{{ $carrierData["aetna"]["name"] }}"></p>--}}
{{--							<p><strong>General Support:</strong><br>{{ $carrierData["aetna"]["generalSupport"] }}<br>--}}
{{--							<strong>Client Support:</strong><br>{{ $carrierData["aetna"]["customerSupport"] }}<br>--}}
{{--							<a href="{{ $carrierData["aetna"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--						<div class="client-info">--}}
{{--							<p><img src="{{ $carrierData["cigna"]["smImg"] }}" alt="{{ $carrierData["cigna"]["name"] }}"></p>--}}
{{--							<p><strong>General Support:</strong><br> {{ $carrierData["cigna"]["generalSupport"] }} <br>--}}
{{--							<strong>Client Support:</strong><br>{{ $carrierData["cigna"]["customerSupport"] }}<br>--}}
{{--							<a href="{{ $carrierData["cigna"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--						<div class="client-info">--}}
{{--							<p><img src="{{ $carrierData["mutualOfOmaha"]["smImg"] }}" alt="{{ $carrierData["mutualOfOmaha"]["name"] }}"></p>--}}
{{--							<p><strong>General Support:</strong><br> {{ $carrierData["mutualOfOmaha"]["generalSupport"] }} <br>--}}
{{--							<strong>Client Support:</strong><br>{{ $carrierData["mutualOfOmaha"]["customerSupport"] }}<br>--}}
{{--							<a href="{{ $carrierData["mutualOfOmaha"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--						<div class="client-info">--}}
{{--							<p><img src="{{ $carrierData["transamerica"]["smImg"] }}" alt="{{ $carrierData["transamerica"]["name"] }}"></p>--}}
{{--							<p><strong>General Support:</strong><br> {{ $carrierData["transamerica"]["generalSupport"] }} <br>--}}
{{--							<strong>Client Support:</strong><br>{{ $carrierData["transamerica"]["customerSupport"] }}<br>--}}
{{--							<a href="{{ $carrierData["transamerica"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--                </div>--}}
{{-- Bottom Row Carriers --}}
{{--                <div class="row row-client-info">--}}
{{--                    <div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--                        <div class="client-info">--}}
{{--                            <p><img src="{{ $carrierData["humana"]["smImg"] }}" alt="{{ $carrierData["humana"]["name"] }}"></p>--}}
{{--                            <p><strong>General Support:</strong><br> {{ $carrierData["humana"]["generalSupport"] }}<br>--}}
{{--                            <strong>Client Support:</strong><br>{{ $carrierData["humana"]["customerSupport"] }}<br>--}}
{{--                            <a href="{{ $carrierData["humana"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--                        <div class="client-info">--}}
{{--                            <p><img src="{{ $carrierData["unitedHealthcare"]["smImg"] }}" alt="{{ $carrierData["unitedHealthcare"]["name"] }}"></p>--}}
{{--                            <p><strong>General Support:</strong><br> {{ $carrierData["unitedHealthcare"]["generalSupport"] }}<br>--}}
{{--                            <strong>Client Support:</strong><br>{{ $carrierData["unitedHealthcare"]["customerSupport"] }}<br>--}}
{{--                            <a href="{{ $carrierData["unitedHealthcare"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--                        <div class="client-info">--}}
{{--                            <p><img src="{{ $carrierData["aig"]["smImg"] }}" alt="{{ $carrierData["aig"]["name"] }}"></p>--}}
{{--                            <p><strong>General Support:</strong><br> {{ $carrierData["aig"]["generalSupport"] }}<br>--}}
{{--                            <strong>Client Support:</strong><br>{{ $carrierData["aig"]["customerSupport"] }}<br>--}}
{{--                            <a href="{{ $carrierData["aig"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3 col-xs-6 res-s-bttm">--}}
{{--                        <div class="client-info">--}}
{{--                            <p><img src="{{ $carrierData["royalNeighbors"]["smImg"] }}" alt="{{ $carrierData["royalNeighbors"]["name"] }}"></p>--}}
{{--                            <p><strong>General Support:</strong><br> {{ $carrierData["royalNeighbors"]["generalSupport"] }}<br>--}}
{{--                            <strong>Client Support:</strong><br>{{ $carrierData["royalNeighbors"]["customerSupport"] }}<br>--}}
{{--                            <a href="{{ $carrierData["royalNeighbors"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
