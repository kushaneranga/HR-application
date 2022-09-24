@extends('layouts.app_normal')

@section('meta-data')
    @include('layouts.includes.meta_data', ['seo_data' => [], 'title' => 'Matter of Stuff | 404'])
@endsection

@section('local-styles')
    <link rel="stylesheet" href="/css/error.css">
@endsection

@section('content')
    <section class="section-404">
        <div class="container-fluid mos-container-fluid">
            <div class="block-404">
                <h1 class="text-center">404</h1>
                <p class="text-center">Sorry, the page you are looking for could not be found...</p>
            </div>
        </div>
    </section>
@endsection