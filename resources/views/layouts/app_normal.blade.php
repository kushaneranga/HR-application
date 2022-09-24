@extends('layouts.app')

@section('body')
    <header>
        @include('layouts.includes.header')
    </header>

    @yield('content')

    <footer>
        @include('layouts.includes.footer')
    </footer>

@endsection
