@extends('layouts.app')

@section('content')
    <a href="/posts" role="button" class="btn btn-default">Back</a>
    @if (Auth::user()->id == $post->user_id)
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['role' => 'button', 'class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        <a href="/posts/{{ $post->id }}/edit" role="button" class="btn btn-default pull-right" style="margin-right: 0.5rem">Edit</a>
    @endif
    <br><br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $post->title }}</h3>
        </div>
        <div class="panel-body">
            <div style="text-align: center">
                <img src="/storage/post_images/{{ $post->post_image }}" alt="Post Image" style="max-height: 30rem; max-width: 35rem">
            </div>
            <hr>
            {!! $post->body !!}
        </div>
    </div>
    <small class="pull-right">Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
@endsection
