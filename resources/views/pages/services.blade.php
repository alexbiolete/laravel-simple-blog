@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="background: inherit !important">
        <h1>{{ $title }}</h1>
        @if (count($services) > 0)
            <ul class="list-group">
                @foreach ($services as $service)
                    <li class="list-group-item">{{ $service }}</li>
                @endforeach
            </ul>
        @else
            <p>There are no services available.</p>
        @endif
    </div>
@endsection
