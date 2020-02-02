@php

    $imgSizes = config('sourcefli.responsiveImagesData.ImgSizes');

    switch (Request::path()) {
        case "about":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.about');
            break;
        case "services":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.services');
            break;
        case "client-resources":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.clientResources');
            break;
        case "blog":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.blog');
            break;
        case "faqs":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.faqs');
            break;
        case "contact":
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.contact');
            break;
        default:
            $heroImgSources = config('sourcefli.responsiveImagesData.pages.heroImg.fallback');
    }
@endphp

<div class="banner banner-static has-bg light-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text">
                    <h1 class="page-title">Individual &amp; Family <br>
                    Health Insurance</h1>
                    <p class="lead">Health insurance plans that fit you and your family.</p>
                </div>
                <div class="banner-sider">
                    <div class="boxed boxed-w">
                        <p>For an insurance call 800-123-6789 or online quote on other insurance options...</p>
                        <a href="get-a-quote.html" class="btn-link link-arrow">Free Online Quote</a>
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