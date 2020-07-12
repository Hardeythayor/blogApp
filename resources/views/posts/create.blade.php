@extends('layouts.app')

@section('content')
    <h1>Create a Post</h1>
    <div class="row mt-3">
        <div class="col-sm-6">
            @include('../inc.messages')
        </div>
    </div>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post']) !!}
        <div class="row mb-4 mt-3">
            <div class="col-sm-6">
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Post Title'])}}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6">
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Type your post here', 'rows' => '5'])}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {{Form::submit('Submit', ['class' => 'btn btn-success px-5'])}}
            </div>
        </div>
    {!! Form::close() !!}
@endsection