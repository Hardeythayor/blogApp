@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is a Laravel tutorial practice from Travesy Media that is been served through Youtube platform</p>
    <p><a href="/login" class="btn btn-primary" role="button">Login</a> <a href="/register" class="btn btn-success" role="button">Register</a></p>
</div>
@endsection