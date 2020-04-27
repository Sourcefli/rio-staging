
@php
    $contactInfo = config('sourcefli.companyData.hqData');
@endphp
<div class="gaps size-sep"></div>
<div class="wide-md center">
    <h3>Prefer to speak or meet with us?</h3>
    <a href="{{ getAcuityLink() }}" class="btn" target="_blank">Book An Appointment</a> &nbsp; <a href="{{ route('getAQuotePage') }}" class="btn">Get A Quote</a>
</div>
