{{-- ============================================--}}
{{--Available VARs--}}
{{--'pageData' => Source: WebsiteController --}}
{{--'bannerData' => Source: WebsiteController --}}
{{--'bannerCtaData' => Source: WebsiteController --}}
{{--'sectionOneHeading' => Source: WebsiteController --}}
{{--'menuLinks' => Source: FooterComposer --}}
{{--'serviceLinks' => Source: FooterComposer --}}
{{--'hqData' => Source: FooterComposer --}}
{{--'logoSrcData' => Source: FooterComposer --}}
{{--'locations' => Source: FooterComposer --}}
{{--'carriers' => Source: CarrierDataComposer --}}
{{-- ============================================--}}

<div class="banner banner-static has-bg banner-cpn-bottom no-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                <div class="banner-text wide-lg">
                    <h1 class="page-title">{!! $pageContent['bannerData']->heading !!}</h1>
                    <p style="margin-top: 2px;"><a href="{{ route('getAQuotePage') }}" class="btn-link link-arrow-sm" style="color: #4ebcff;">Request more information at anytime</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bg imagebg">
        <img src="{{ $pageContent['bannerData']->image->default_src }}" alt="{{ $pageContent['bannerData']->image->alt_text }}"/>
    </div>
</div>
