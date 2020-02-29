
@php
    $contactInfo = config('sourcefli.companyData.hqData');
@endphp
<div class="gaps size-sep"></div>
<div class="wide-md center">
    <h3>Reach out anytime</h3>
    <a href="/get-a-quote" class="btn">Get A Quote</a> &nbsp; <a href="tel:{{ $contactInfo["phone"] }}" class="btn">Call Us</a>
</div>
