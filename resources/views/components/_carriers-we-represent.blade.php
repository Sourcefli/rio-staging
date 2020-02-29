
<div class="section section-logos section-pad-sm">
    <div class="container">
        <div class="content row">
            <h4 class="center ucap">Access to more than 150 carriers</h4>
            <div class="owl-carousel loop logo-carousel style-v1">
                @foreach($carriers as $carrier)
                    <div class="logo-item">
                        <img
                            alt="{{ $carrier->name }}"
                            width="140"
                            height="55"
                            src="{{ $carrier->smImg }}">
                    </div>
                @endforeach
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["aetna"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["aetna"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["cigna"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["cigna"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["mutualOfOmaha"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["mutualOfOmaha"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["transamerica"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["transamerica"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["humana"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["humana"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["unitedHealthcare"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["unitedHealthcare"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["aig"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["aig"]["smImg"] }}">--}}
{{--                </div>--}}
{{--                <div class="logo-item">--}}
{{--                    <img--}}
{{--                        alt="{{ $carrierData["royalNeighbors"]["name"] }}"--}}
{{--                        width="140"--}}
{{--                        height="55"--}}
{{--                        src="{{ $carrierData["royalNeighbors"]["smImg"] }}">--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
