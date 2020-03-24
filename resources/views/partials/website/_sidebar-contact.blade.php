
@php
    $companyData = config('sourcefli.companyData.hqData');
@endphp
<div class="contact-details col-md-4 col-md-offset-1">
    <ul class="contact-list">
            <li>
                <h3>Contact Information</h3>
            </li>
            <li>
                <strong>{{ option('asb_fullName') }}</strong><br>
                {{ $hqData->street_one }} {{  $hqData->street_two }}<br>
                {{  $hqData->csZip }}
            </li>
            <li><strong class="color-primary">Toll Free</strong><br>
                {{ $hqData->toll_free_phone }}
            </li>
            <li><strong class="color-primary">Local Phone</strong><br>
                {{ $hqData->office_phone }}
            </li>
            <li><strong class="color-primary">Email</strong><br>
                <a href="mailto:{{ $hqData->office_email }}">{{ $hqData->office_email }}</a>
            </li>
            <li><strong class="color-primary">Hours Of Operation</strong><br>
                {!! $hqData->days_and_hours !!}
            </li>
            <li>
                <a href="#contact-our-team" class="btn-link link-arrow-sm">Contact Your Agent</a>
            </li>
    </ul>
</div>
