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
                    <h2>{{ $headingContent->heading }}</h2>
                    <p class="lead">{{ $headingContent->body }}</p>
                </div>
                <!-- Top Row of Service Cards -->
                <div class="row row-feature row-column mt-x5">
                    @include('partials.website._three_service-columns-two_rows_text-overview')
                </div>
                <!-- Learn More Excerpt -->
                <div class="gaps size-lg"></div>
                <div class="wide-md center bdr-top" style="padding-top: 20px">
                    <p class="lead">To learn more, <a href="{{ route('contactPage') }}">get in touch</a>. We're here at anytime for your peace of mind.</p>
                    <p>Have a quick question? Fire up <a href="{{ $hqData->facebook_url }}">a chat with us on Facebook</a>.</p>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('belowMain') {{-- No content --}} @endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection

{{--!! THE OLD SERVICES VERSION !!--}}

{{--                    @foreach ($servicesRowOne as $service)--}}
{{--                            <div class="col-md-4 col-sm-6">--}}
{{--                                <!-- feature box -->--}}
{{--                                <div class="feature boxed feature-s6">--}}
{{--                                    <a href="{!! $service->read_more_link !!}">--}}
{{--                                        <div class="fbox-photo">--}}
{{--                                            <img src="{!! $service->card_img_url !!}" alt="{!! $service->title !!}">--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="fbox-content">--}}
{{--                                        <h4>{!! $service->title !!}</h4>--}}
{{--                                        <p>{!! $service->summary !!}</p>--}}
{{--                                        <p><a href="{!! $service->read_more_link !!}" class="btn-link link-arrow-sm">Read More</a></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End Feature box -->--}}
{{--                            </div>--}}
{{--                    @endforeach--}}
{{--                <!-- Top Row  #end -->--}}

{{--                <!-- Bottom Row  -->--}}
{{--                    @foreach ($servicesRowTwo as $service)--}}
{{--                        <div class="col-md-4 col-sm-6">--}}
{{--                            <!-- featured box -->--}}
{{--                            <div class="feature boxed feature-s6">--}}
{{--                                <a href="{!! $service->read_more_link !!}">--}}
{{--                                    <div class="fbox-photo" style="max-height: 210px;">--}}
{{--                                        <img src="{{ $service->card_img_url }}" alt="{!! $service->title !!}">--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="fbox-content">--}}
{{--                                    <h3>{!! $service->title !!}</h3>--}}
{{--                                    <p>{!! $service->summary !!}</p>--}}
{{--                                    <p><a href="{!! $service->read_more_link !!}" class="btn-link link-arrow-sm">Read More</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Feature box -->--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
