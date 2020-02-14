@extends('layouts.website.master')



@section('title')
    ASB Southwest Services
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('belowHero')
    {{-- @include('components/_services-grid') --}}
@endsection

@section('content')
    <div class="section section-services section-pad">
        <div class="container">
            <div class="content row">

                <div class="wide-sm center">
                    <h2>Our Insurance Services</h2>
                    <p class="lead">Services Description</p>
                </div>
                <!-- Top Row of Service Cards -->
                <div class="row row-feature row-column mt-x5">
                    @foreach ($servicesRowOne as $service)
                        {{-- @foreach ($service as $data) --}}
                        {{-- {{ dd($service) }} --}}
                            <div class="col-md-4 col-sm-6">
                                <!-- feature box -->
                                <div class="feature boxed feature-s6">
                                    <a href="{!! $service["readMoreLink"] !!}">
                                        <div class="fbox-photo">
                                            <img src="{!! $service["cardImg"] !!}" alt="{!! $service["heading"] !!}">
                                        </div>
                                    </a>
                                    <div class="fbox-content">
                                        <h3>{!! $service["heading"] !!}</h3>
                                        <p>{!! $service["summary"] !!}</p>
                                        <p><a href="{!! $service["readMoreLink"] !!}" class="btn-link link-arrow-sm">Read More</a></p>
                                    </div>
                                </div>
                                <!-- End Feature box -->
                            </div>
                    @endforeach
                <!-- Top Row  #end -->

                <!-- Bottom Row  -->
				{{-- <div class="row row-feature row-column">--> --}}
                    @foreach ($servicesRowTwo as $service)
                        <div class="col-md-4 col-sm-6">
                            <!-- featured box -->
                            <div class="feature boxed feature-s6">
                                <a href="{!! $service["readMoreLink"] !!}">
                                    <div class="fbox-photo" style="max-height: 210px;">
                                        <img src="{{ $service["cardImg"] }}" alt="{!! $service["heading"] !!}">
                                    </div>
                                </a>
                                <div class="fbox-content">
                                    <h3>{!! $service["heading"] !!}</h3>
                                    <p>{!! $service["summary"] !!}</p>
                                    <p><a href="{!! $service["readMoreLink"] !!}" class="btn-link link-arrow-sm">Read More</a></p>
                                </div>
                            </div>
                            <!-- End Feature box -->
                        </div>
                    @endforeach
                </div>
                <!-- Learn More Excerpt -->
                <div class="gaps size-lg"></div>
                <div class="wide-md center">
                    <p class="lead">To learn more, <a href="/contact">get in touch</a>. We're here for you — and your peace of mind.</p>
                    <p>Have a quick question? Fire up <a href="faqs.html">a chat with us</a>.</p>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('belowMain') {{-- No content --}} @endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection
