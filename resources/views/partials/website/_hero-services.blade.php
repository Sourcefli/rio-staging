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

<div class="banner banner-static banner-small bg-light">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                <div class="banner-text dark pos-center center">
                    <h1 class="page-title">{!! $servicesData->heading !!}</h1>
                    <p>{!! $servicesData->subheading !!}</p>
                    <p><a href="{{ route('getAQuotePage') }}" class="btn-link link-arrow-sm">Request more information at anytime</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
