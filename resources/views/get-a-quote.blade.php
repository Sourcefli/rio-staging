@extends('layouts.website.sidebar-contact')


@php
    $pageData = config("sourcefli.siteData");
    $navData = config("sourcefli.siteData.nav.items");
    $teamData = config("sourcefli.asbTeam");
    $bestTime = config("sourcefli.formData.contact.bestTime");
    $selections = config("sourcefli.formData.quotes.selections");
    $referredBy = config("sourcefli.formData.quotes.referredBy");
    $acuityApptUrl = 'https://asbsouthwest.as.me/?appointmentType=category:American%20Senior%20Benefits%20Southwest';
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
            Please <a href="{{ route('contactPage') }}">contact us</a> with questions or to set-up an appointment to speak with one of our agents by <a href="{{ $acuityApptUrl }}" target="_blank">clicking here</a>.
        </p>
        <span class="gaps size-xs"></span>
        <div class="quote-group">

            {{-- !! FIX FORM HANDLING !! --}}
            <form id="quote-contact-request" class="form-quote" action="form/quote-request.php" method="POST">
                @csrf
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
                <h5>Topics of Interest<small> (select all that apply)</small></h5>
                <div class="form-group row">
                    <div class="form-group row">
                        @foreach($selections as $selection)
                            <?php
                            $i = $loop->iteration;
                            $oddLoop = $i % 3;
                            if($oddLoop === 1) {
                                echo '<ul class=\'form-field clearfix\'>';
                            }
                            ?>

                            <li class="col-sm-4">
                                <input type="checkbox" name="quote-request-interest[]" value="{{ $selection }}">
                                <span>{{ $selection }}</span>
                            </li>

                            <?php
                            $oddLoop = $i % 3;
                            if($oddLoop === 0) {
                                echo '</ul>';
                            }
                            $i++;
                            ?>
                        @endforeach
                    </div>
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
                            {{-- 8 loops --}}
                            @foreach($referredBy as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
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
