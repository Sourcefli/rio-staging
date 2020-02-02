@extends('layouts.website.sidebar')

 {{-- SIDEBAR LAYOUT BLOCK SECTIONS 
[ ] {{ asyncTracking }}
[ ] {{  Title }}
[ ] {{ extraCss }}
[ ] {{  hero }}
[ ] {{  content }}
[ ] {{  sidebar }}
[ ] {{ belowMain }}
[ ] {{ preFooter }}
[ ] {{ extraJs  ---}}

@php
    $pageData = config("sourcefli.siteData.aboutPageData")
@endphp

@section('title')
    About Us
@endsection

@section('hero')

    @include('partials/website/_hero-slim')
        
@endsection


@section('content')
    

    <div class="col-md-8">
                            
        <h1 class="heading-lead">About ASB Southwest</h1>
        <p class="lead">Licensed Professionals For Any Of Your Retirement Needs</p>
        
        <p>et <strong>dignissimos ducimus qui</strong> dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        
        <p><strong>eiusmod tempor dunt ut</strong> eiusmod tempor dunt ut labore et dolore mane eiusmod tempor dunt ut labore et dolore mane eiusmod tempor incididunt ut magna aliqua.</p>
        
        <h4>We're Dedicated.</h4>
        <p>tempor incididunt ut labore et dolore magna eiusmod tempor dunt ut labore et dolore mane eiusmod tempor incididunt ut magna aliqua.</p>
        
        <h4>We're eger to help.</h4>
        <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
        
        <hr>

        <h2>Awards &amp; Recognition</h2>
        <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident ensue tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam duis aute irure dolor.</p>
        <p><a href="#" class="btn-link link-arrow-sm">View all awards</a></p>
        
        <hr>
        <h2>Meet our Team</h2>
        <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. Eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam. Duis aute irure dolor.</p>
        <p><a href="#" class="btn-link link-arrow-sm">Click here to know them</a></p>

    </div>
@endsection

@section('sidebar')
    @include('partials/website/_sidebar-main')    
@endsection

@section('belowMain')
    @include('components/_carriers-we-represent')    
@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')    
@endsection
