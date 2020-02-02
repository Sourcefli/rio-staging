@extends('layouts.website.master')


@php
    $imageData = config("sourcefli.responsiveImagesData");
    $carrierData = config("sourcefli.carrierData");
@endphp

@section('title')
    Client Resources
@endsection

@section('hero')
    @include('partials/website/_hero-slim')        
@endsection

{{-- TODOS --}}
{{-- [  ] CHANGE THE HERO IMAGE FOR Client Resources Page (And other secondary pages...about us and home pages are already done) --}}
{{-- [  ] READY TO RENDER CARRIER LOGOS --}}


@section('content')
    
    <div class="section section-contents section-pad">
        <div class="container">
            <div class="content row">
                {{-- Top Row Carriers --}}
                <div class="row row-client-info">
                    <div class="col-sm-3 col-xs-6 res-s-bttm">
						<div class="client-info">
                        <p><img src="{{ $carrierData["aetna"]["smImg"] }}" alt="{{ $carrierData["aetna"]["name"] }}"></p>
							<p><strong>General Support:</strong>{{ $carrierData["aetna"]["generalSupport"] }}<br>
							<strong>Client Support:</strong>{{ $carrierData["aetna"]["customerSupport"] }}<br>
							<a href="{{ $carrierData["aetna"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6 res-s-bttm">
						<div class="client-info">
							<p><img src="{{ $carrierData["cigna"]["smImg"] }}" alt="{{ $carrierData["cigna"]["name"] }}"></p>
							<p><strong>General Support:</strong> {{ $carrierData["cigna"]["generalSupport"] }} <br>
							<strong>Client Support:</strong>{{ $carrierData["cigna"]["customerSupport"] }}<br>
							<a href="{{ $carrierData["cigna"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6 res-s-bttm">
						<div class="client-info">
							<p><img src="{{ $carrierData["mutualOfOmaha"]["smImg"] }}" alt="{{ $carrierData["mutualOfOmaha"]["name"] }}"></p>
							<p><strong>General Support:</strong> {{ $carrierData["mutualOfOmaha"]["generalSupport"] }} <br>
							<strong>Client Support:</strong>{{ $carrierData["mutualOfOmaha"]["customerSupport"] }}<br>
							<a href="{{ $carrierData["mutualOfOmaha"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6 res-s-bttm">
						<div class="client-info">
							<p><img src="{{ $carrierData["transamerica"]["smImg"] }}" alt="{{ $carrierData["transamerica"]["name"] }}"></p>
							<p><strong>General Support:</strong> {{ $carrierData["transamerica"]["generalSupport"] }} <br>
							<strong>Client Support:</strong>{{ $carrierData["transamerica"]["customerSupport"] }}<br>
							<a href="{{ $carrierData["transamerica"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
						</div>
					</div>
                </div>
                {{-- Bottom Row Carriers --}}
                <div class="row row-client-info">
                    <div class="col-sm-3 col-xs-6 res-s-bttm">
                        <div class="client-info">
                            <p><img src="{{ $carrierData["humana"]["smImg"] }}" alt="{{ $carrierData["humana"]["name"] }}"></p>
                            <p><strong>General Support:</strong> {{ $carrierData["humana"]["generalSupport"] }}<br>
                            <strong>Client Support:</strong>{{ $carrierData["humana"]["customerSupport"] }}<br>
                            <a href="{{ $carrierData["humana"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 res-s-bttm">
                        <div class="client-info">
                            <p><img src="{{ $carrierData["unitedHealthcare"]["smImg"] }}" alt="{{ $carrierData["unitedHealthcare"]["name"] }}"></p>
                            <p><strong>General Support:</strong> {{ $carrierData["unitedHealthcare"]["generalSupport"] }}<br>
                            <strong>Client Support:</strong>{{ $carrierData["unitedHealthcare"]["customerSupport"] }}<br>
                            <a href="{{ $carrierData["unitedHealthcare"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 res-s-bttm">
                        <div class="client-info">
                            <p><img src="{{ $carrierData["aig"]["smImg"] }}" alt="{{ $carrierData["aig"]["name"] }}"></p>
                            <p><strong>General Support:</strong> {{ $carrierData["aig"]["generalSupport"] }}<br>
                            <strong>Client Support:</strong>{{ $carrierData["aig"]["customerSupport"] }}<br>
                            <a href="{{ $carrierData["aig"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 res-s-bttm">
                        <div class="client-info">
                            <p><img src="{{ $carrierData["royalNeighbors"]["smImg"] }}" alt="{{ $carrierData["royalNeighbors"]["name"] }}"></p>
                            <p><strong>General Support:</strong> {{ $carrierData["royalNeighbors"]["generalSupport"] }}<br>
                            <strong>Client Support:</strong>{{ $carrierData["royalNeighbors"]["customerSupport"] }}<br>
                            <a href="{{ $carrierData["royalNeighbors"]["homePageUrl"] }}" target="_blank" class="btn-link">Visit Their Home Page</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')    
@endsection