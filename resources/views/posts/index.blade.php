@extends('layouts.app')

@section('content')
    @include('../inc.messages')
    <a href="/posts/create" class="btn btn-success float-right px-4"><i class="fa fa-plus mr-2"></i>Add New Post</a>
    <h1 class="mt-4 mb-4">Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
            <a class="postLink" href="/posts/{{$post->id}}">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3 shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>{{ $post->title }}</h5>
                                        <small>Written on {{ $post->created_at }} by {{$post->user->name}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        {{ $posts->links()}}
    @else
        <p class="text-center">No post available to display</p>
    @endif
@endsection