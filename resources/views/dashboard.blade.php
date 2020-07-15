@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-success float-right px-4"><i class="fa fa-pencil-alt mr-2"></i>Create Post</a><br>
                    <h4 class="mt-4">Your Blog Posts</h4>
                    <table class="table table-bordered table-hover table-striped mt-2">
                        @if (count($posts) > 0)

                        <thead>
                          <tr>
                            <th width="700">Title</th>
                            <th></th>
                          </tr>
                        </thead>

                        <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="w-5">{{$post->title}}</td>
                                        <td>
                                            <div class="pull-left">
                                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mb-5" role="button"><i class="fa fa-edit mr-2"></i></a>
                                    
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right ml-2'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    <button class="btn btn-danger" role="button"><i class="fa fa-trash mr-2"></i></button> 
                                                {!!Form::close()!!} 
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>

                        @else
                            <tr>
                                <td colspan="2" class="text-center">You have no posts yet. Use the "Create Post" button to start making posts</td>
                            </tr>
                        @endif
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
