@extends('layouts/website/sidebar')

{{-- # SIDEBAR LAYOUT BLOCK SECTIONS }
[ ] { asyncTracking }
[x] { Title }
[ ] { extraCss }
[x] { hero }
[x] { content }
[x] { sidebar }
[x] { belowMain }
[x] { preFooter }
[ ] { extraJs #--}}

@section('title')
    Wise Retirement
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('content')
   
    <div class="col-md-8">

        <h2>Medicare 360 Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nostrum dignissimos amet excepturi, consequuntur impedit rem placeat autem sapiente. Aperiam?</p>
        
        <div class="gaps"></div>
        <div class="row row-column-md mgauto">
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Advantage Plan Coverage</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, repellat.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Supplement Plan Coverage</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, omnis?</p>
                </div>
            </div>
        </div>
        <div class="row row-column-md">
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Roadside Assistance</h5>
                    <p>No one wants to be left stranded im ipsam voltatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conntur eot.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Accident Forgiveness</h5>
                    <p>Don’t let one mistake affect vero eos et acco usamus et iusto odio dignis simos duimus qui bland itiis praes entium.</p>
                </div>
            </div>
        </div>
        <div class="gaps size-sep"></div>
        <div class="box-s2">
            <p>If you have any questions regarding our services, please <strong>contact us</strong> or call at <strong>800 1234 6789</strong>.</p>
        </div>
        <div class="gaps size-sep"></div>
        
        <h3>Comprehensive and collision</h3>
        <p>Not all insurance companies offer that vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praese. Voluptatum deleniti atque corrupti quos dolores et molestias sit amet, consectetur adipiscing elit ullamco laboris nisi ut aliquip.</p>
        <hr class="hr-sm">
        <div class="icon-box size-md icon-aside icon-inline">
            <em class="fa fa-car"></em>
        </div>
        <p class="small"><strong>Example:</strong> You motorcycle $1,000 for new, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        
        <h3>Guarantees repairs</h3>
        <p>Not all insurance companies offer that vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praese. Voluptatum deleniti atque corrupti quos dolores et molestias sit amet, consectetur adipiscing elit ullamco laboris nisi ut aliquip.</p>
        <hr class="hr-sm">
        <div class="icon-box size-md icon-aside icon-inline">
            <em class="fa fa-motorcycle"></em>
        </div>
        <p class="small"><strong>Example:</strong> You motorcycle $1,000 for new, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

        @include('partials.website._contact-us-two-sm-buttons')
        
    </div>
 
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-services')
@endsection

@section('belowMain')
    
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection


@section('extraJs')
    
@endsection