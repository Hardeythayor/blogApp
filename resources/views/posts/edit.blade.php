@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light mb-5" role="button"><i class="fa fa-arrow-left mr-2"></i>Go back</a>
    <h1>Edit Post</h1>
    <div class="row mt-3">
        <div class="col-sm-6">
            @include('../inc.messages')
        </div>
    </div>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        <div class="row mb-4 mt-3">
            <div class="col-sm-6">
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Post Title'])}}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6">
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Type your post here', 'rows' => '5'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
        </div>
        <div class="row mb-4">
            <div class="col-sm-6">
                {{Form::file('cover_image')}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {{Form::submit('Update', ['class' => 'btn btn-success px-5'])}}
            </div>
        </div>
    {!! Form::close() !!}
@endsection