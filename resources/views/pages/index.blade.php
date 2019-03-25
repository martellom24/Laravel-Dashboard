@extends('layouts.default')

@section('content')

    <main role="main" class="text-center inner cover">
        <h1 class="cover-heading">Martello two page website</h1>
        <p class="lead">Click below to find out more!</p>
        <p class="lead">
            <a href="{{route('contact')}}" class="btn btn-lg btn-primary">Contact Me Now</a>
        </p>
    </main>

@endsection