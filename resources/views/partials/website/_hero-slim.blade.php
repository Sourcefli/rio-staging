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
<div class="banner banner-static has-bg light-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text">
                    {{-- Serve Heading and Subheading based on which age the user is on--}}
                    <h2 class="page-title">{!! $bannerData->heading !!}<br></h2>
                    <p class="lead">{!! $bannerData->subheading !!}</p>
                </div>
                <div class="banner-sider">
                    <div class="boxed boxed-w">
                        <p>{{ $bannerCtaData['body'] }}</p>
                        <a href="{{ route('getAQuotePage') }}" class="btn-link link-arrow">Get A Quote</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg" id="{{ (Request::path() === 'services') ? 'services-hero' : '' }}" style="background-image:url( {{ getHeroImg(Request::path()) }} );">
            <img class=""
                alt="{{ trim(View::getSection('title')) }}"
                src="{{ getHeroImg(Request::path()) }}"
            />
    </div>
</div>
