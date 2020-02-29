@php

    $imgSizes = config('sourcefli.responsiveImagesData.ImgSizes');

    //Dynamic Data for each page
    switch (Request::path()) {
        case "about":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.about');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.about');
            break;
        case "services":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.services');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.services');
            break;
        case "client-resources":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.clientResources');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.clientResources');
            break;
        case "blog":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.blog');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.blog');
            break;
        case "faqs":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.faqs');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.faqs');
            break;
        case "contact":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.contact');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.contact');
            break;
        default:
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.fallback');
            $heroCopy = config('sourcefli.responsiveImagesData.pages.heroCopy.fallback');
    }
@endphp

<div class="banner banner-static has-bg light-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text">
                    <h1 class="page-title">{{ option('about_banner_heading') }}<br> /* ?? */</h1>
                    <p class="lead">{{ option('about_banner_subheading') }}</p>
                </div>
                <div class="banner-sider">
                    <div class="boxed boxed-w">
                        <p>For an insurance call 800-123-6789 or online quote on other insurance options...</p>
                        <a href="/get-a-quote" class="btn-link link-arrow">Get A Quote</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg" id="{{ (Request::path() === 'services') ? 'services-hero' : '' }}">
            <img class=""
            alt="{{ trim(View::getSection('title')) }}"
            src="{{ $heroImgSources["xl"] }}"
            {{-- style="background: center; background-repeat: no-repeat; background-position: -20% 40%;  --}}
            srcset="{{ $heroImgSources["sm"] }}, {{ $heroImgSources["md"] }}, {{ $heroImgSources["lg"] }}"
            sizes="{{ $imgSizes["imgSizesSm"] }}, {{ $imgSizes["imgSizesMd"] }}, {{ $imgSizes["imgSizesLg"] }}"/>
    </div>
</div>
