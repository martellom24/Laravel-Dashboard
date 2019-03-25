@extends('layouts.default')

@section('content')

    <main role="main" class="text-center inner cover">
        <h1 class="cover-heading">Martello Cover Page.</h1>
        <p class="lead">Click below to find out more!</p>
        <p class="lead">
            <a href="{{route('contact')}}" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
    </main>

@endsection