@extends('admin.layouts.master')
@section('panel')

<div id="layout-wrapper">
    @include('admin.partials.header')
    <div class="vertical-menu">

        <div data-simplebar class="h-100">
            @include('admin.partials.sidebar')
            <!-- Sidebar -->
        </div>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
    @include('admin.partials.footer')
</div>
@endsection
