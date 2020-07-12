@extends('layouts.app')

@section('content')
    <h2><i>{{ $title }}</i></h2>
    <p>This pages gives insight int different services offered by Travesy Media</p>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{ $service }}</li><br>
            @endforeach
        </ul>
    @endif
@endsection
