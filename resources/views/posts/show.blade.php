@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light mb-5" role="button"><i class="fa fa-arrow-left mr-2"></i>Go back</a>
    <div class="float-right">
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mb-5" role="button"><i class="fa fa-edit mr-2"></i></a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right ml-2'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        <button class="btn btn-danger mb-5" role="button"><i class="fa fa-trash mr-2"></i></button> 
    {!!Form::close()!!} 

    </div>
    <h1>{{ $post->title }}</h1>
    <div>
        <p>{{ $post->body }}</p>
    </div><hr>
    <small>written on {{$post->created_at}}</small>
@endsection