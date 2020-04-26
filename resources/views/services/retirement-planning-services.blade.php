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
    Medicare 360
@endsection

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('content')
   
    <div class="col-md-8">
        <h2>Medicare 360</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus vero, aperiam ipsam nobis illum dignissimos provident sapiente ipsa fugiat maiores eius id, suscipit ea explicabo reprehenderit facere quam labore. In rerum itaque rem labore repellat sapiente quae numquam, facilis laudantium!</p>
        
        <div class="gaps"></div>
        <div class="row row-column-md mgauto">
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Standard Coverage</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium commodi explicabo itaque ex nobis optio autem, unde sapiente qui rerum!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Supplement Plan Coverage</h5>
                    <p>Get access to a rental car eos nissimos ducimus qui bland itiis praes entium volup tatum deleniti atque quos et molest.</p>
                </div>
            </div>
        </div>
        <div class="row row-column-md">
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Special Needs Plans</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, velit!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-flat">
                    <h5 class="color-primary">Medicare Part D Options</h5>
                    <p>Don’t let one mistake affect vero eos et acco usamus et iusto odio dignis simos duimus qui bland itiis praes entium.</p>
                </div>
            </div>
        </div>
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