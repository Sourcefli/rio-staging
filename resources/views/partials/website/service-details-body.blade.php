{{-- VARs AVAILABLE ON THE MAIN $pageContent Variable --}}
{{-- Access each VARs as an array, then a class prop
{{-- e.g. $pageContent['bannerData']->heading --}}
{{--'bannerData',--}}
{{--'commonQuestionsData',--}}
{{--'serviceOptionsData',--}}
{{--'serviceScenariosData',--}}
{{--'path'--}}

    <div class="icon-box size-md icon-aside icon-inline">
        <i class="fa fa-money"></i>
    </div>
    <h2>Steady Income You Can Count On</h2>
    <p>{!! $pageContent['bannerData']->subheading !!}</p>
    <h3>Common Questions about {!! $pageContent['bannerData']->body !!}</h3>
    <table class="table table-s1 table-claim table-bordered table-vertical">
        <tbody>
        @foreach($pageContent['commonQuestionsData'] as $commonQuestions)
            <tr>
                <td>
                    <p style="color: #0d9aef;"><a href="#"><strong>{!! $commonQuestions->heading !!}</strong></a><br>
                </td>
                <td>
                    <p>{!! $commonQuestions->body !!}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2>{!! $pageContent['bannerData']->body !!} Options with ASBsw</h2>
    <div class="gaps"></div>
    @foreach($pageContent['serviceOptionsData']->chunk(2) as $serviceOptions)

        {{-- if chunk has 2 items --}}
        @if (count($serviceOptions) % 2 === 0)
            <div class="row row-column-md mgauto">
                @foreach($serviceOptions as $option)
                    <div class="col-md-6">
                        <div class="box-flat">
                            <h5 class="color-primary">{!! $option->heading !!}</h5>
                            <p>{!! $option->body !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        {{-- if chunk only has 1 item --}}
        @else
            <div class="gaps"></div>
            <div class="row row-column-md mgauto">
                <div class="col-md-10">
                    <div class="box-flat">
                        <h5 class="color-primary">{!! $option->heading !!}</h5>
                        <p>{!! $option->body !!}</p>
                    </div>
                </div>
            </div>
        @endif

    @endforeach
        <div class="gaps size-sep"></div>
{{--    <h3>{!! $pageContent['bannerData']->body !!} Options with ASBsw</h3>--}}
{{--    <table class="table table-s1 table-claim table-bordered table-vertical">--}}
{{--        <tbody>--}}
{{--        @foreach($pageContent['serviceOptionsData'] as $serviceOptions)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <p style="color: #0d9aef;"><a href="#"><strong>{!! $serviceOptions->heading !!}</strong></a><br>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <p>{!! $serviceOptions->body !!}</p>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}

    <h4 class="color-primary">The ideal scenarios for {!! $pageContent['bannerData']->body !!}</h4>
    <p>If you find yourself in any of the following situations, please reach out to us. We believe we can help...</p>
    <div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
    @foreach($pageContent['serviceScenariosData'] as $scenarios)
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="accordion-i{{ $loop->iteration }}">
                <h4 class="panel-title">
                    <a class="active collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i{{ $loop->iteration }}" aria-expanded="false">
                        {!! $scenarios->heading !!}
                        <span class="plus-minus"><span></span></span>
                    </a>
                </h4>
            </div>
            <div id="accordion-pane-i{{ $loop->iteration }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i{{ $loop->iteration }}" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <p>{!! $scenarios->body !!}</p>
                </div>
            </div>
        </div>
    @endforeach
    <!-- end each panel -->
    </div>

{{--    <!-- each panel for accordion -->--}}
{{--    <div class="panel panel-default">--}}
{{--        <div class="panel-heading" role="tab" id="accordion-i1">--}}
{{--            <h4 class="panel-title">--}}
{{--                <a class="active collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">--}}
{{--                    How does it works?--}}
{{--                    <span class="plus-minus"><span></span></span>--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--        </div>--}}
{{--        <div id="accordion-pane-i1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i1" aria-expanded="false" style="height: 0px;">--}}
{{--            <div class="panel-body">--}}
{{--                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- each panel for accordion -->--}}
{{--    <div class="panel panel-default">--}}
{{--        <div class="panel-heading" role="tab" id="accordion-i2">--}}
{{--            <h4 class="panel-title">--}}
{{--                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">--}}
{{--                    How long my product reach?--}}
{{--                    <span class="plus-minus"><span></span></span>--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--        </div>--}}
{{--        <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2" aria-expanded="false" style="height: 0px;">--}}
{{--            <div class="panel-body">--}}
{{--                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- each panel for accordion -->--}}
{{--    <div class="panel panel-default">--}}
{{--        <div class="panel-heading" role="tab" id="accordion-i3">--}}
{{--            <h4 class="panel-title">--}}
{{--                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">--}}
{{--                    Should I expect to pay fees?--}}
{{--                    <span class="plus-minus"><span></span></span>--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--        </div>--}}
{{--        <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3" aria-expanded="false" style="height: 0px;">--}}
{{--            <div class="panel-body">--}}
{{--                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- each panel for accordion -->--}}
{{--    <div class="panel panel-default">--}}
{{--        <div class="panel-heading" role="tab" id="accordion-i4">--}}
{{--            <h4 class="panel-title">--}}
{{--                <a class="" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="true">--}}
{{--                    What are typical considerations?--}}
{{--                    <span class="plus-minus"><span></span></span>--}}
{{--                </a>--}}

{{--            </h4>--}}
{{--        </div>--}}
{{--        <div id="accordion-pane-i4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i4" aria-expanded="true" style="">--}}
{{--            <div class="panel-body">--}}
{{--                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


