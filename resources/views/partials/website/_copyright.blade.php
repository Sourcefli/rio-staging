@php
    $now = now();
@endphp

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="site-copy col-sm-7">
                <p>
                    Copyright &copy; {{ $now->year }} {{ config('sourcefli.companyData.ssbData.legalName') }}
                    <span class="sep"></span>
                    <a href="{{ route('privacyPage') }}" target="_blank">Privacy Policy</a>
                    <span class="sep"> </span>
                    <a href="{{ route('sitemapPage') }}" target="_blank">Sitemap</a></p>
            </div>
            <div class="site-by col-sm-5 al-right">
                <p><a href="{{ config('sourcefli.devinfo.url') }}" target="_blank">Contact Website Developer</a></p>
            </div>
        </div>
    </div>
</div>
