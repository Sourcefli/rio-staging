@php
    $cats = config('sourcefli.siteData.partials.sidebarFaqs.categories')
@endphp


<div class="col-md-4">
    <div class="sidebar-right">

        <div class="wgs-box wgs-menus">
            <div class="wgs-content">
                <ul class="list list-grouped">
                    <li class="list-heading">
                        <span>Faq's</span>
                        <ul>
                            <li><a class="current" href="#genMedicare">{{ $cats[0] }}</a></li>
                            <li><a href="#medAdvantage">{{ $cats[1] }}</a></li>
                            <li><a href="#medSupp">{{ $cats[2] }}</a></li>
                            <li><a href="#medCovGaps">{{ $cats[3] }}</a></li>
                            <li><a href="#prepForRet">{{ $cats[4] }}</a></li>
                            <li><a href="#finPlan">{{ $cats[5] }}</a></li>
                            <li><a href="#retInc">{{ $cats[6] }}</a></li>
                            <li><a href="#lifeIns">{{ $cats[7] }}</a></li>
                            <li><a href="#finExp">{{ $cats[8] }}</a></li>
                            <li><a href="#extCare">{{ $cats[9] }}</a></li>
                            <li><a href="#nurHomeAndCov">{{ $cats[10] }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="wgs-box boxed boxed-flat">
            <div class="wgs-content">
                <h5>Report a Claim</h5>
                <p>A team of insurance professionals who are there when you need them, Just call them.</p>
                <p><a href="claims.html" class="btn-link link-arrow-sm">Claim Info</a></p>
            </div>
        </div>

        <div class="wgs-box boxed bg-secondary light">
            <div class="wgs-content">
                <h3>Extensive Retirement Options</h3>
                <p>At ASBsw, we'll always ty to give all information you'll need to make good choice for insurance.</p>
                <a href="{{ config('sourcefli.siteData.nav.contact.url') }}" class="btn btn-light btn-alt">Get In Touch</a>
            </div>
        </div>

    </div>
</div>