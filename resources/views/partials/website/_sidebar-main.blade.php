@php
    $nav = config('sourcefli.siteData.nav.items')
@endphp

<div class="col-md-4">
    <div class="sidebar-right">

        <div class="wgs-box wgs-menus">
            <div class="wgs-content">
                <ul class="list list-grouped">
                    <li class="list-heading">
                        <span>About Retirement Insurance Options</span>
                        <ul>
                            <li><a href="{{ $nav["services"]["url"] }}">Overview</a></li>
                            <li class="current"><a href="{{ $nav["about"]["url"] }}">About Company</a></li>
                            <li><a href="{{ $nav["about"]["url"] }}">Meet our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ $nav["about"]["url"] }}"><span>Testimonials</span></a></li>
                    <li><a href="{{ $nav["contact"]["uri"] }}"><span>Frequently Ask Questions</span></a></li>
                </ul>
            </div>
        </div>

        <div class="wgs-box boxed boxed-flat">
            <div class="wgs-content">
                <h3>An Open Letter To Our Website Visitors</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis susc.</p>
                <h6><strong>Joseph Williams</strong><br>Owner &amp; CEO</h6>
            </div>
        </div>

        <div class="wgs-box boxed boxed-flat">
            <div class="wgs-content">
                <h5>Report a Claim</h5>
                <p>A team of insurance professionals who are there when you need them, Just call them.</p>
                <p><a href="claims.html" class="btn-link link-arrow-sm">Claim Info</a></p>
            </div>
        </div>

    </div>
</div>