@extends('layouts.master')

@section('content')
    <h2 class="h2 text-center text-primary">Blog</h2>
    @if ($posts->isNotEmpty())
        @foreach ($posts as $post)
            <div class="container">
                <h3 class="h3 text-primary">{{ $post->title }}</h3>
                <span class="small">By: <strong class="text-success">{{ $post->user->name }}</strong></span>
                <span class="float-right small">Published On: <strong class="text-success">{{ $post->created_at->toDateString() }}</strong></span>
                <hr>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    @else
        <p>Posts are coming soon.</p>
    @endif
@endsection
