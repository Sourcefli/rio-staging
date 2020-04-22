
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
            </div>
        </div>
    </div>
</div>
