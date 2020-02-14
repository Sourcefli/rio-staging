{{-- !!! TODOs !!! #}
{# [] Change card image real link #}


{# ====== PAGE VARIABLES ===== #}
{# Shorten Loop Vars #}
{% set title = serviceCards.title %}
{% set hTitle = serviceCards.htmlTitle %}
{% set summary = serviceCards.summary %}
{% set imgClass = serviceCards.photoClass %}
{% set contentClass = serviceCards.contentClass %}
{% set outerClass = serviceCards.outerClass %}
{% set innerClass = serviceCards.innerClass %}
{% set href = serviceCards.href %}
{% set img = serviceCards.img %}
{% set fakeImg = serviceCards.fakeImg %}
{# ====== END VARIABLES ===== --}}



    <div class="section section-services section-pad-md section-overup">
        <div class="container">
            <div class="content row">
                {{-- {# Service Card ROW #} --}}
                <div class="row row-feature row-column-sm">
                    {{-- {# ==== LOOP ==== #} {% for i in serviceCards %} --}}
                    @foreach ($serviceCardData as $i)
                        <div class="{{ $i["outerClass"] }}">
                            {{-- {# Service Card CONTENT #} --}}
                            <div class="{{ $i["innerClass"] }}" style="border-radius: 2px;box-shadow:0 10px 40px 0 rgba(0,0,0,.1);">
                                <a href="{{ $i["href"] }}">
                                    <div class="{{ $i["photoClass"] }}">
                                        <img src="{{ $i["img"] }}" alt="{{ $i["title"] }}" />
                                        {{-- {# ^ CHANGE FOR PRODUCTION ^ #} --}}
                                    </div>
                                    <div class="{{ $i["contentClass"] }}">
                                        <h3 class="ucap">{{ $i["title"] }}</h3>
                                        <p>{{ $i["summary"] }}</p>
                                        <span class="btn btn-md btn-alt">Read More</span>
                                    </div>
                                </a>
                            </div>
                            {{-- {# end Service Card CONTENT #} --}}
                        </div>
                    @endforeach
                    {{-- {% endfor %} --}}
                </div>
                <!-- Feture Row  #end -->
                {{-- {# END LOOP #} --}}
            </div>
        </div>
    </div>
    <!-- End service cards content -->

    {{-- <div class="section section-content section-pad no-pt">
        <!-- Text Below Service Cards -->
        <div class="container">
            <div class="content row">
                <div class="wide-sm center">
                    <h2 class="heading-lead">{{ config('sourcefli.siteData.serviceList.headline') }}</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Text below Service Cards -->
