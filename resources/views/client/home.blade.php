@extends('client.master')


@section('content')
    <div class="bg-primary">
        @include('client.component.home.hero')
        @include('client.component.home.popularDestination')
    </div>
@endsection
