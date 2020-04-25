{{--Available VARs--}}
{{--'managerStatement' => Source: SidebarComposer --}}
{{--'hqData' => Source: SidebarComposer --}}
{{--'links' => Source: FooterComposer --}}
{{--'carriers' => Source: CarrierDataComposer --}}

<div class="col-md-4">
    <div class="sidebar-right">

        <div class="wgs-box wgs-menus">
            <div class="wgs-content">
                <ul class="list list-grouped">
                    <li class="list-heading">
                        <span>Quick Navigation</span>
                        <ul>
                            <li class="@if(Request::path() === 'home') {{ "current" }} @endif"><a href="{{ route('homePage') }}">Overview</a></li>
                            <li class="@if(request()->path() === 'about') {{ "current" }} @endif"><a href="{{ route('aboutPage') }}">About American Senior Benefits</a></li>
                            <li class="@if(Request::path() === 'services') {{ "current" }} @endif"><a href="{{ route('servicesPage') }}">View Our Services</a></li>
                            <li class="@if(Request::path() === 'get-a-quote') {{ "current" }} @endif"><a href="{{ route('getAQuotePage') }}">Get Quotes</a></li>
                            <li class="@if(Request::path() === 'contact') {{ "current" }} @endif"><a href="{{ route('contactPage') }}#contact-our-team">Get In Touch</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

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

        <div class="wgs-box boxed boxed-flat">
            <div class="wgs-content">
                <h5>Request Assistance With Your Benefits</h5>
                <p>Our team of experienced insurance professionals are here when you need them, call or reach out anytime.</p><br><small><em>No-contact</em> options are available</small>
                <p><a href="{{ route('contactPage') }}" class="btn-link link-arrow-sm">Request A Call</a></p>
            </div>
        </div>

    </div>
</div>
