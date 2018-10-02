@extends('layout')
@section('content')
    <div>
        @foreach($post->reactions as $reaction)
            <h1>Title: {{$reaction->title}}</h1>
            <p>Body: {{$reaction->body}}</p>
            <hr>
        @endforeach
    </div>
@endsection