<div class="col-md-4">
    <div class="sidebar-right">

        <div class="wgs-box wgs-menus">
            <div class="wgs-content">
                <ul class="list list-grouped">
                    <li class="list-heading">
                        <span>Quick Links To Other Services</span>
                        <ul>
                            @foreach($serviceDetailsSidebarData as $link)
                                <li @if($link->href === $pageContent['path']->href){!!'class="current"'!!}@else{{''}}@endif><a href="{{ $link->href }}">{{ $link->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wgs-box wgs-quoteform">
            <h3 class="wgs-heading">Reach Out To Us</h3>
            <div class="wgs-content">
                <p>
                    If you have any questions, please don't hesitate to submit them to us below. <br><br>
                    <em>To request quotes, you can click <a href="{{ route('getAQuotePage') }}"><strong>here</strong></a>.</em><br><br>
                    <em>To schedule your own appointment, in person or over the phone, with one of our agents <a
                            href="{{ getAcuityLink() }}" target="_blank"><strong>here</strong></a>.</em>
                </p>

                {{-- FIX FORM HANDLER --}}
                @include('partials.forms.service-details-sidebar-form')
            </div>
        </div>

    </div>
</div>
