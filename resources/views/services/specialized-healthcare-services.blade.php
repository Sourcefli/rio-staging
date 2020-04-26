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
    Protected Investments
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('content')
   
    <div class="col-md-8">

        <h2>Protected Investments Page</h2>
        <p>Are you getting quality auto insurance coverage and the value dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        
        <div class="gaps"></div>
        <div class="row row-column-md mgauto">
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Standard Coverage</h5>
                    <p>You can trust Insuance Pro &amp; they able nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit sed.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Temporary Vihicle Replacement</h5>
                    <p>Get access to a rental car eos nissimos ducimus qui bland itiis praes entium volup tatum deleniti atque quos et molest.</p>
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

        <div class="gaps size-sep"></div>
        <div class="wide-md center">
            <h3>Contact Us With Questions and to Set-Up an Appointment</h3>
            <a href="#" class="btn">Free Online Quote</a> &nbsp; <a href="#" class="btn">Call 800-123-6789</a>
        </div>
        
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