@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light mb-5" role="button"><i class="fa fa-arrow-left mr-2"></i>Go back</a>
    <h1>{{ $post->title }}</h1>
    <div>
        <p>{{ $post->body }}</p>
    </div><hr>
    <small>written on {{$post->created_at}}</small>
@endsection