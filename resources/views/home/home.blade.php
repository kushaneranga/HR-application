@extends('layouts.app')

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

{{-- Footer  styles --}}

@section('page-specific-footer-css')

@endsection
