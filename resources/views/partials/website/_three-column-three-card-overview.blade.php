<!-- Content -->
<div class="section section-content section-pad">
    <div class="container">
        <div class="content row">
            <div class="row row-column-md">
                @foreach($sectionTwoCards as $card)
                    @if($loop->iteration < 3)
                        <div class="{{ $card['outer_div_classes'] }}">
                            <h5 class="{{ $card['inner_div_classes'] }}">{{ $card['title'] }}</h5>
                            <div class="{{ $card['body_div_classes'] }}">
                                <img src="{{ $card['image_src'] }}" alt="{{ $card['title'] }}">
                            </div>
                            <p>{{ $card['html_body'] }}</p>
                        </div>
                    @else
                        <div class="{{ $card['outer_div_classes'] }}">
                            <h5 class="color-primary">{{ $card['title'] }}</h5>
                            <ul class="{{ $card['body_div_classes'] }}">
                                @for($i = 0; $i < count($sectionTwoListItems); $i++)
                                    <li><strong>{{ $sectionTwoListItems[$i] }}</strong></li>
                                @endfor
                            </ul>
                            <p>
                                <a href="{{ route('getAQuotePage') }}" class="block btn btn-alt btn-md">{{ $card['href_text'] }}</a>
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
