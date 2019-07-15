@extends('layouts.app')

@section('content')
    <a href="/Posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}></h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <Small>Written on {{$post->created_at}}</Small>
@endsection
