@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Posts</div>

                <div class="panel-body">
                    @if (count($posts) > 0)
                        <table class="table">
                            {{-- <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr> --}}
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                    <th>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['role' => 'button', 'class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                        <a href="/posts/{{ $post->id }}/edit" role="button" class="btn btn-default pull-right" style="margin-right: 0.5rem">Edit</a>
                                        <a href="/posts/{{ $post->id }}" role="button" class="btn btn-default pull-right" style="margin-right: 0.5rem">View</a>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have not created any post.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
