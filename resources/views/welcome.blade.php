@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}

            <div class="container">
                <h1 class='text-5xl font-bold mb-2'>All Posts</h1>
                @foreach ($posts as $post)
                <article class="border-b border-black border-solid p-2 mb-3">
                    <h2 class="text-xl font-bold mb-2"><a href="/posts/{{$post->id}}/view">{{$post->title}}</a></h2>
                    <p class="text-md"> {{$post->content}} </p>
                    <span class="mt-4 block">Created at: {{$post->created_at}}</span>
                </article>
                @endforeach

            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection