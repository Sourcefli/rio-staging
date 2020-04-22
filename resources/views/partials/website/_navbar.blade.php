

@php
    $nav = config('sourcefli.siteData');
    $quoteNav = config('sourcefli.siteData.nav.items.quote');
    $hqData = config('sourcefli.companyData.hqData');
    $config = config('sourcefli.responsiveImagesData.ImgSizes');
    $pages = config('sourcefli.siteData.nav.items');
    $img = config('sourcefli.siteData.nav.img');
@endphp

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="top-aside top-left clearfix hidden-xs">
                <p><strong>We are currently licensed in NV and CA</strong></p>
            </div>
            <div class="top-aside top-right clearfix">
                <ul class="social clearfix hidden-xs">
                    <li><a href="{{ $nav["facebook"]["url"] }}" class="{{ $nav["facebook"]["icon"] }}" style="color:lightgrey;"></a></li>
                    <li><a href="{{ $nav["twitter"]["url"] }}" class="{{ $nav["twitter"]["icon"] }}" style="color:lightgrey;"></a></li>
                    <li><a href="{{ $nav["linkedIn"]["url"] }}" class="{{ $nav["linkedIn"]["icon"] }}" style="color:lightgrey;"></a></li>
                </ul>
                <ul class="top-contact clearfix">
                    <li class="t-phone t-phone1">
                        <em class="fa fa-phone" aria-hidden="true"></em>
                        <span
                            ><a href="tel:{{ $hqData["phone"] }}">{{ $hqData["phone"] }}</a></span
                        >
                    </li>
                    <li class="quote-btn">
                        <a href="{{ $quoteNav["uri"] }}" class="btn">Get A Quote</a>
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
                alt="{{ $hqData["fullName"] }}"
                src="{{ $img["srcSm"] }}"
                srcset="{{ $img["srcsetSm"] }}, {{ $img["srcsetMd"] }}, {{ $img["srcsetLg"] }}"
                sizes="{{ $config["imgSizesSm"] }}, {{ $config["imgSizesMd"] }}, {{ $config["imgSizesLg"] }}"
            />
            <!-- <img class="logo logo-light" alt="" src="image/logo_white.png" srcset="image/logo_white2x.png 2x"> -->
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
                @foreach ($nav["nav"]["items"] as $navItem)
                    <li>
                        <a href="{{ env('APP_URL') }}{{ $navItem["uri"] }}">{{ $navItem["title"] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
