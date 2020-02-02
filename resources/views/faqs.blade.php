{% extends "layouts/_sidebar.twig" %}

{{--# SIDEBAR LAYOUT BLOCK SECTIONS }
[ ] { asyncTracking }
[x] { Title }
[ ] { extraCss }
[x] { hero }
[x] { content }
[x] { sidebar }
[x] { belowMain }
[x] { preFooter }
[ ] { extraJs # --}}


{% set questions = partials.sidebarFaqs.questions %}
{% set answers = partials.sidebarFaqs.answers %}

@php
    //Questions => Multi-Array
    $questions = config('sourcefli.siteData.partials.sidebarFaqs.questions')

    //Categories => Basic Array
    $questionCategories = config('sourcefli.siteData.partials.sidebarFaqs.categories')

    $questionCategories = config('sourcefli.siteData.partials.sidebarFaqs.categories')
@endphp

@section('title')
    Frequently Asked Questions
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection


@section('content')
    
    <div class="col-md-8 pad-r">
        <h2>Common Questions</h2>
        <p>Here you'll find a range of customer queries from the most common to the most obscure.</p>
        <!-- Accordion -->
        <div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
            <!-- each panel for accordion -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="accordion-i1">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
                            How do I buy insurance?
                            <span class="plus-minus"><span></span></span>
                        </a>
                    </h4>
                </div>
                <div id="accordion-pane-i1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i1">
                    <div class="panel-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                    </div>
                </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="accordion-i2">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
                            How do I buy insurance?
                            <span class="plus-minus"><span></span></span>
                        </a>
                    </h4>
                </div>
                <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
                    <div class="panel-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                    </div>
                </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="accordion-i3">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
                            How do i renew my Home Insurance policy?
                            <span class="plus-minus"><span></span></span>
                        </a>
                    </h4>
                </div>
                <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
                    <div class="panel-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                        <p>Anim pariatur cliche reprehenderit accusamus terry richardson squid.</p>
                    </div>
                </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="accordion-i4">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
                                How do they buy insurance?
                            <span class="plus-minus"><span></span></span>
                        </a>

                    </h4>
                </div>
                <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4">
                    <div class="panel-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                    </div>
                </div>
            </div>
            <!-- end each panel -->
        </div>
        <hr>

            <!-- Accordion #end -->

        <h2>Frequently Asked Questions</h2>
        <p>Below are frequently asked questions and answers about all the different services we provide. We're always a click away if you'd ever like to meet with us, chat, and/or send us a message.</p>
        <!-- FAQ @i -->
        <div class="faqs faqs-flat">
            <h3 class="faq-heading">Q: {{ questions[0] }}</h3> <p>{{ answers[0] }}</p>
        </div>
        <!-- // @s-->
        <div class="faqs faqs-flat">
        <h3 class="faq-heading">Q: How do I verify my online policy?</h3>
            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
        </div>
        <!-- // @s-->
        <div class="faqs faqs-flat">
        <h3 class="faq-heading">Q: How do I view my online policy?</h3>
            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
        </div>
        <!-- // @s-->
        <div class="faqs faqs-flat">
        <h3 class="faq-heading">Q: How do I verify my online policy?</h3>
            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
        </div>
        <!-- // @s-->
        <div class="faqs">
        <h3 class="faq-heading">Q: How do I see my online policy?</h3>
            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
        </div>
        <!-- #end FAQ -->
        
        <p>If you're unable to find the answers you're seeking please <a href="{{ nav.items.contact.uri }}">Contact us</a> and we will aim to respond to you within 24 hours, although it's much sooner. </p>
    </div>

@endsection

@section('sidebar')

    @include('partials/website/_sidebar-faq')

@endsection

@section('belowMain')
    
@endsection

@section('preFooter')

    @include('includes/website/_blue-bg-cta')

@endsection
