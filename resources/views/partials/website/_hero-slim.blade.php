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

                {{-- Small CTA Div within the hero banner on each page --}}
                <div class="banner-sider">
                    <div class="boxed boxed-w">
                        <p>{{ $bannerCtaData->body }}</p>
                        <a href="{{ route('getAQuotePage') }}" class="btn-link link-arrow">{{ $bannerCtaData->href_text }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="banner-bg imagebg" id="{{ $bannerData->html_id }}" style="background-image:url( {{ $bannerData->image->default_src }} );">
            <img class=""
                alt="{{ $bannerCtaData }}"
                src="{{ $bannerData->image->default_src }}"
            />
    </div>
</div>
