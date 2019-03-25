@extends('layouts.default')

@section('content')
    <h1 class="cover-heading text-center">Sign Up Form</h1>
    <form id="contact-form" class="contact-form" action="{{route('contact.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" class="form-control" aria-describedby="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="body" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection