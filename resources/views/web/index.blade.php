@extends('web.layouts.app')

@section('content')
    <div class="home-page">

        @include('web.partials.header')

        @include('web.partials.categories')

        @include('web.partials.main-content')

        @include('web.partials.side-bar')

        {{--@include('web.partials.footer')--}}

    </div>
@endsection
