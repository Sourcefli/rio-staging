@extends('layouts.website.sidebar-contact')


@php
    $pageData = config("sourcefli.siteData");
    $qouteNav = config("sourcefli.siteData.nav.quote");
    $teamData = config("sourcefli.asbTeam");
    $bestTime = config("sourcefli.formData.contact.bestTime");
    $selections = config("sourcefli.formData.contact.selections");
    $referredBy = config("sourcefli.formData.contact.referredBy");
    $acuityApptUrl = 'https://asbsouthwest.as.me/?appointmentType=category:American%20Senior%20Benefits%20Southwest';
@endphp

@section('title')
    Contact Us
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection


@section('content')
    <div class="section section-contents section-contact section-pad">
        <div class="container">
            <div class="content row">

                <div class="contact-content row">
                    <div class="drop-message col-md-8 pad-r res-m-bttm">
                        <h2>Contact Information</h2>
                        <div class="row">
                            <div class="col-sm-5 res-s-bttm-sm">
                                <p><strong>American Senior Benefits - Southwest</strong><br>
                                    {{ $hqData->street_one }} {{ $hqData->street_two }} <br>{{ $hqData->city }} NV {{ $hqData->zip }}, USA.</p>
                            </div>
                            <div class="col-sm-4 res-s-bttm-sm">
                                <p><strong>Contact Number</strong> <br>
                                    Local Phone: {{ $hqData->office_phone }}<br>
                                    Toll Free: {{ $hqData->toll_free_phone }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p><strong>Office Hours</strong><br>
                                    {{ $hqData->days_of_operation }}<br>
                                    {{ $hqData->hours_of_operation }}</p>
                            </div>
                        </div>
                        <div class="gaps size-lg"></div>
                        <div class="clear"></div>
                        <h4>Get in touch by submitting the form below:</h4>

                        {{-- !! FIX FORM HANDLING !! --}}
                        <form id="quote-contact-request" class="form-message" action="form/contact.php" method="post">
                            <div class="form-results"></div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-name" type="text" placeholder="Name *" class="form-control required">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-phone" type="text" placeholder="Phone *" class="form-control required">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-cell" type="text" placeholder="Cell Phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-address" type="text" placeholder="Address" class="form-control">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-citystate" type="text" placeholder="City, State, Zip" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-service" type="text" placeholder="Type of Product Interest" class="form-control">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-besttime" type="text" placeholder="Best time to reach" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="contact-message" placeholder="Messages / Question *" class="txtarea form-control required"></textarea>
                                </div>
                            </div>
                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn solid-btn sb-h">Submit</button>
                        </form>
                    </div>
                    <div class="contact-maps col-md-4" >
                        <div class="wgs-box boxed boxed-flat">
                            <div class="wgs-content">
                                <h5>{{ $managerStatement->heading }}</h5>
                                <div class="fbox-photo">
                                    <img src="/img/asb_staff/don-havens.jpg" alt="Don Havens Photo" style="margin: 10px; height: 120px; border-radius: 50%; text-align: center;">
                                </div>
                                <p><em>{{ $managerStatement->body }}</em></p>
                                <h6><strong>- Don Havens</strong><br>Owner &amp; RSM <br> American Senior Benefits - Southwest Region</h6>
                            </div>
                        </div>

{{--                        <!-- Map -->--}}
{{--                        <div class="map-holder map-contact-horizontal">--}}
{{--                            <div id="gmap"></div>--}}
{{--                            <span class="gaps size-xs"></span>--}}
{{--                            <small><a href="#" class="btn-link">View on google Map &rsaquo;</a></small>--}}
{{--                        </div>--}}
{{--                        <!-- End map -->--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('belowMain')
    @include('partials/website/_team-contact-details')
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection
