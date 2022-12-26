@extends('client.master')


@section('content')
    <div class="bg-primary">
        @include('client.component.home.hero')
        @include('client.component.home.popularDestination')
        @include('client.component.home.spesialOffer')
        @include('client.component.home.story')
        @include('client.component.home.testimoni')
    </div>
@endsection
