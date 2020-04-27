@extends('layouts/website/sidebar')

{{--!!! NOT BEING USED !!! --}}
{{--All Service Details Handled By service-details.blade.php with different data being passed in through controller routes--}}

@section('title')
    Life Insurance Services
@endsection

@section('hero')
    @include('partials/website/_hero-services')
@endsection

@section('content')
    <div class="col-md-8">
        <div class="icon-box size-md icon-aside icon-inline">
            <i class="fa fa-dollar"></i>
        </div>
        <h3>Most Common Questions</h3>
        <table class="table table-s1 table-claim table-bordered table-vertical">
            <tbody>
            <tr>
                <td>
                    <p><a href="#"><strong>Life Insurance and Final Expense: Question 1</strong></a><br>
                </td>
                <td>
                    <p>Life Insurance and Final Expense: answer 1</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><a href="#"><strong>Life Insurance and Final Expense: Question 2</strong></a><br>
                </td>
                <td>
                    <p>Life Insurance and Final Expense: answer 2</p>
                </td>
            </tr>
            </tbody>
        </table>

        <h3>Life Insurance and Final Expense Options with ASBsw</h3>
        <table class="table table-s1 table-claim table-bordered table-vertical">
            <tbody>
            <tr>
                <td>
                    <p><a href="#"><strong>Life Insurance and Final Expense: Option 1</strong></a><br>
                </td>
                <td>
                    <p>Life Insurance and Final Expense: Option 1 description</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><a href="#"><strong>Life Insurance and Final Expense: Option 2</strong></a><br>
                </td>
                <td>
                    <p>Life Insurance and Final Expense: Option 2 description</p>
                </td>
            </tr>
            </tbody>
        </table>

        <h4 class="color-primary">Most Common Use Cases</h4>
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
