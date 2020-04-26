

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="top-aside top-left clearfix hidden-xs">
                <p><strong>We are currently licensed in NV and CA</strong></p>
            </div>
            <div class="top-aside top-right clearfix">
                <ul class="social clearfix hidden-xs">
                    <li><a href="{{ $hqData->facebook_url }}" class="{{ $hqData->facebook_icon }}" style="color:lightgrey;"></a></li>
                    <li><a href="{{ $hqData->twitter_url }}" class="{{ $hqData->twitter_icon }}" style="color:lightgrey;"></a></li>
                    <li><a href="{{ $hqData->linkedin_url }}" class="{{ $hqData->linkedin_icon }}" style="color:lightgrey;"></a></li>
                </ul>
                <ul class="top-contact clearfix">
                    <li class="t-phone t-phone1">
                        <em class="fa fa-phone" aria-hidden="true"></em>
                        <span><a href="tel:{{ $hqData->office_phone }}">{{ $hqData->office_phone }}</a></span>
                    </li>
                    <li class="quote-btn">
                        <a href="{{ route('getAQuotePage') }}" class="btn">Get A Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #end Topbar -->
<!-- Navbar -->
<div class="navbar navbar-primary">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img
                class="logo logo-dark"
                alt="American Senior Benefits Southwest Logo"
                src="{{ $headerLogo->default_src }}"
                srcset="{{ $headerLogo->small_srcsetsize}}, {{ $headerLogo->medium_srcsetsize }}, {{ $headerLogo->large_srcsetsize }}"
                sizes="(max-width: 560px) 212px, (max-width: 768px) 326px, (min-width: 769px) 456px"
            />
        </a>
        <!-- #end Logo -->
        <div class="navbar-header">
            <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#mainnav"
                aria-expanded="false"
            >
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Q-Button for Mobile -->
            <div class="quote-btn">
                <a class="btn" href="{{ route('getAQuotePage') }}"><span>Get A Quote</span></a>
            </div>
        </div>
        <!-- #MainNav -->
        <nav class="navbar-collapse collapse" id="mainnav">
            <ul class="nav navbar-nav">
                @foreach ($links as $navItem)
                    <li>
                        @if ($navItem->title === 'Careers')
                            <a href="{{ $navItem->uri }}" target="_blank">{{ $navItem->title }}</a>
                        @else
                            <a href="{{ env('APP_URL') }}{{ $navItem->uri }}">{{ $navItem->title }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
