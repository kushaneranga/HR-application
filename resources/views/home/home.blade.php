@extends('layouts.app_normal')

@section('local-styles')
    <link rel="stylesheet" type="text/css" href="/css/pages/home.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            @include(
                'partials.home_login'
            )
        </div>
    </div>
@endsection

@section('local-scripts')
    <script src="" charset=""></script>
@endsection
