@php
    $route = Request::path();

    $servicesRowOne = config('sourcefli.servicesData.servicesRowOne');
    $servicesRowTwo = config('sourcefli.servicesData.servicesRowTwo');

@endphp

<div class="row row-column-md mgauto">

        @if ($route !== "burial-preperation")
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Standard Coverage</h5>
                    <p>You can trust Insuance Pro &amp; they able nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit sed.</p>
                </div>
            </div>
        @endif

        @if ($route !== "/diversify-your-nestegg")
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Temporary Vihicle Replacement</h5>
                    <p>Get access to a rental car eos nissimos ducimus qui bland itiis praes entium volup tatum deleniti atque quos et molest.</p>
                </div>
            </div>
        @endif
            @if ($route !== "/wise-retirement")
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Temporary Vihicle Replacement</h5>
                    <p>Get access to a rental car eos nissimos ducimus qui bland itiis praes entium volup tatum deleniti atque quos et molest.</p>
                </div>
            </div>
        @endif
</div>
<div class="row row-column-md">

    @if ($route !== "/protected-investments")
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Roadside Assistance</h5>
                    <p>No one wants to be left stranded im ipsam voltatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conntur eot.</p>
                </div>
            </div>
    @endif

    @if ($route !== "/expect-the-unexpected")
        <div class="col-md-6">
            <div class="box-flat">
                <h5 class="color-primary">Accident Forgiveness</h5>
                <p>Don’t let one mistake affect vero eos et acco usamus et iusto odio dignis simos duimus qui bland itiis praes entium.</p>
            </div>
        </div>
    @endif

    @if ($route !== "/medicare360")
        <div class="col-md-6">
            <div class="box-flat">
                <h5 class="color-primary">Accident Forgiveness</h5>
                <p>Don’t let one mistake affect vero eos et acco usamus et iusto odio dignis simos duimus qui bland itiis praes entium.</p>
            </div>
        </div>
    @endif
</div>

