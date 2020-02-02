@extends('layouts.website.sidebar-contact')


@php
    $pageData = config("sourcefli.siteData");
    $qouteNav = config("sourcefli.siteData.nav.quote");
    $teamData = config("sourcefli.asbTeam");
    $bestTime = config("sourcefli.formData.contact.bestTime");
    $selections = config("sourcefli.formData.contact.selections");
    $referredBy = config("sourcefli.formData.contact.referredBy");
@endphp

@section('title')
    Contact Us
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection


@section('content')
<div class="drop-message col-md-7 res-m-bttm">
    <h3>Complete the form below too get in touch with us or <a href="{{ $qouteNav["uri"] }} ">request a quote.</a> </h3>
    <form id="quote-contact-request" class="form-quote" action="form/quote-request.php" method="post">
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="quote-request-name" type="text" placeholder="Your Name *" class="form-control required">
            </div>
            <div class="form-field col-md-6">
                <input name="quote-request-company" type="text" placeholder="Your Company" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="quote-request-email" type="email" placeholder="Email Address *" class="form-control required email">
            </div>
            <div class="form-field col-md-6">
                <input name="quote-request-phone" type="text" placeholder="Phone Number *" class="form-control required">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="quote-request-address" type="text" placeholder="Address" class="form-control">
            </div>
            <div class="form-field col-md-6">
                <input name="quote-request-citystate" type="text" placeholder="City, State, Zip" class="form-control">
            </div>
        </div>
        <h4>Topic Of Interest</h4>
        <div class="form-group row">
            <ul class="form-field clearfix">
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[0] }}">
                    <span>{{ $selections[0] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[1] }}">
                    <span>{{ $selections[1] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[2] }}"> 
                    <span>{{ $selections[2] }}</span>
                </li>
            </ul>
            <ul class="form-field clearfix">
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[3] }}"> 
                    <span>{{ $selections[3] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[4] }}"> 
                    <span>{{ $selections[4] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[5] }}"> 
                    <span>{{ $selections[5] }}</span>
                </li>
            </ul>
            <ul class="form-field clearfix">
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[6] }}"> 
                    <span>{{ $selections[6] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[7] }}"> 
                    <span>{{ $selections[7] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[8] }}"> 
                    <span>{{ $selections[8] }}</span>
                </li>
            </ul>
            <ul class="form-field clearfix">
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[9] }}"> 
                    <span>{{ $selections[9] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[10] }}"> 
                    <span>{{ $selections[10] }}</span>
                </li>
                <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="{{ $selections[11] }}"> 
                    <span>{{ $selections[11] }}</span>
                </li>
            </ul>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6">
                <p>Best Time to Reach</p>
                <select name="quote-request-reach">
                    <option value="">Please select</option>
                    <option value="{{ $bestTime[0] }}">{{ $bestTime[0] }}</option>
                    <option value="{{ $bestTime[1] }}">{{ $bestTime[1] }}</option>
                    <option value="{{ $bestTime[2] }}">{{ $bestTime[2] }}</option>
                </select>
            </div>
            <div class="form-field col-md-6">
                <p>Hear About Us</p>
                <select name="quote-request-hear">
                    <option value="">Please select</option>
                    <option value="{{ $referredBy[0] }}">{{ $referredBy[0] }}</option>
                    <option value="{{ $referredBy[1] }}">{{ $referredBy[1] }}</option>
                    <option value="{{ $referredBy[2] }}">{{ $referredBy[2] }}</option>
                    <option value="{{ $referredBy[3] }}">{{ $referredBy[3] }}</option>
                    <option value="{{ $referredBy[4] }}">{{ $referredBy[4] }}</option>
                    <option value="{{ $referredBy[5] }}">{{ $referredBy[5] }}</option>
                    <option value="{{ $referredBy[6] }}">{{ $referredBy[6] }}</option>
                    <option value="{{ $referredBy[7] }}">{{ $referredBy[7] }}</option>
                    <option value="{{ $referredBy[8] }}">{{ $referredBy[8] }}</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-12">
                <textarea name="quote-request-message" placeholder="Messages / Comments *" class="txtarea form-control required"></textarea>
            </div>
        </div>
        <input type="text" class="hidden" name="form-anti-honeypot" value="">
        <button type="submit" class="btn">Submit</button>
        <div class="form-results"></div>
    </form>
</div>
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-contact')    
@endsection

@section('belowMain')
    @include('partials/website/_team-contact-details')
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')    
@endsection
