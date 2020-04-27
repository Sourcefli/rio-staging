@extends('layouts/website/sidebar')

{{--!!! NOT BEING USED !!! --}}
{{--All Service Details Handled By service-details.blade.php with different data being passed in through controller routes--}}


@section('title')
    Specialized Healthcare Services
@endsection

@section('hero')
    @include('partials/website/_hero-services')
@endsection

@section('content')
    <div class="col-md-8">
        <div class="icon-box size-md icon-aside icon-inline">
            <i class="fa fa-heart-o"></i>
        </div>
        <h2>Steady Income You Can Count On</h2>
        <h3>Most Common Questions</h3>
        <table class="table table-s1 table-claim table-bordered table-vertical">
            <tbody>
            <tr>
                <td>
                    <p style="color: #0c97eb;"><strong>Specialized Healthcare: Question 1</strong><br>
                </td>
                <td>
                    <p>Specialized Healthcare: answer 1</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: #0c97eb;"><strong>Specialized Healthcare: Question 2</strong></p><br>
                </td>
                <td>
                    <p>Specialized Healthcare: answer 2</p>
                </td>
            </tr>
            </tbody>
        </table>

        <h3>Specialized Healthcare Options with ASBsw</h3>
        <table class="table table-s1 table-claim table-bordered table-vertical">
            <tbody>
            <tr>
                <td>
                    <p style="color: #0c97eb;"><strong>Specialized Healthcare: Option 1</strong></p><br>
                </td>
                <td>
                    <p>Specialized Healthcare: Option 1 description</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: #0c97eb;"><strong>Specialized Healthcare: Option 2</strong></p><br>
                </td>
                <td>
                    <p>Specialized Healthcare: Option 2 description</p>
                </td>
            </tr>
            </tbody>
        </table>

        <h4 class="color-primary">Common scenarios where having specialized healthcare is most beneficial</h4>
        <p>If you find yourself in any of the following situations, please reach out to us. We believe we can help...</p>
        <ul class="list-style checkmark">
            <li>Scenario 1</li>
            <li>Scenario 2</li>
            <li>Scenario 3</li>
        </ul>

        @include('components._cta-double-btn')
    </div>

@endsection

@section('sidebar')
    @include('partials/website/_sidebar-service-details')
@endsection

@section('belowMain')

@endsection

@section('preFooter')
    @include('components/_blue-bg-cta')
@endsection


@section('extraJs')

@endsection
