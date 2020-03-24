<div class="banner banner-static has-bg light-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text">
                    {{-- Serve Heading and Subheading based on which age the user is on--}}
                    <h2 class="page-title">{{ getPageHeading(Request::path()) }}<br></h2>
                    <p class="lead">{{ getPageSubheading(Request::path()) }}</p>
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
    <div class="banner-bg imagebg" id="{{ (Request::path() === 'services') ? 'services-hero' : '' }}" style="background-image:url( {{ getHeroImg(Request::path()) }} );">
            <img class=""
                alt="{{ trim(View::getSection('title')) }}"
                src="{{ getHeroImg(Request::path()) }}"
            />
    </div>
</div>
