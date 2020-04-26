@extends('layouts/website/sidebar')



@php
    $contactPhone = config('sourcefli.companyData.hqData.tollFree');
@endphp

@section('title', 'Burial Preperation')

@section('hero')
    @include('partials/website/_hero-slim')
@endsection

@section('content')

    <div class="col-md-8">

        <h2>Burial Preperation Page</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis dignissimos earum esse est eum expedita fugit mollitia nihil obcaecati, odit omnis optio praesentium quaerat repudiandae sit suscipit voluptas voluptatum.
        </p>

        <div class="gaps size-sep"></div>
        <div class="box-s2">
            <p>If you have any questions or concerns, please <strong><a href="/contact">contact us</a></strong> or call us at <strong>{{ $contactPhone }}</strong>.</p>
        </div>
        <div class="gaps size-sep"></div>

        <h3>Final Expense Insurance Options</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab delectus dignissimos, eius excepturi explicabo fugiat ipsum nam, placeat possimus praesentium provident quos reiciendis reprehenderit, sed soluta tenetur vel voluptate voluptatum!
        </p>
        <hr class="hr-sm">
        <div class="icon-box size-md icon-aside icon-inline">
            <em class="fa fa-heart"></em>
        </div>
        <p class="small">
            <strong>Example:</strong>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt in ipsa labore minus mollitia nulla obcaecati omnis quibusdam vitae?
        </p>

        <hr>

        <h3>Indexed Life Products</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad autem culpa delectus deserunt, facilis libero numquam repellat saepe tempora tempore, veritatis voluptatibus! Amet aperiam excepturi molestiae quae, sed veniam.
        </p>
        <hr class="hr-sm">
        <div class="icon-box size-md icon-aside icon-inline">
            <em class="fa fa-bar-chart"></em>
        </div>
        <p class="small">
            <strong>Example:</strong>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto deserunt fugiat inventore, nemo quas quisquam repellat repudiandae tempora vero!
        </p>

        <div class="gaps"></div>

        <hr>

        @include('components/_other-services')

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
