
@php
    $companyData = config('sourcefli.companyData.hqData');
@endphp
<div class="contact-details col-md-4 col-md-offset-1">
    <ul class="contact-list">
        <li>
            <h3>Contact Information</h3>
        </li>
        <li>
            <strong>{{ $companyData["fullName"] }}</strong><br>
            {{ $companyData["streetOne"] }} {{ $companyData["streetTwo"] }}<br>
            {{ $companyData["cszip"] }}
        </li>
        <li><strong class="color-primary">Toll Free</strong><br>
            {{ $companyData["tollFree"] }}
        </li>
        <li><strong class="color-primary">Local Phone</strong><br>
            {{ $companyData["phone"] }}
        </li>
        <li><strong class="color-primary">Email</strong><br>
            <a href="mailto:{{ $companyData["adminEmail"] }}">{{ $companyData["adminEmail"] }}</a>
        </li>
        <li><strong class="color-primary">Hours Of Operation</strong><br>
            Monday-Friday<br>
            {{ $companyData["hours"] }}
        </li>
        <li>
            <a href="#contact-our-team" class="btn-link link-arrow-sm">Contact Your Agent</a>
        </li>
    </ul>
</div>
    