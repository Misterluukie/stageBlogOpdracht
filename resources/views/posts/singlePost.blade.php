@extends('layouts.app')

@section('title', 'View post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}

            <div class="container">
                <h1 class='text-5xl font-bold mb-2'>{{$post->title}}</h1>
                <p>{{$post->content}}</p>
                <span>Created at: {{$post->created_at}}</span><br>
                <span> Last updated at: {{$post->updated_at}}</span>

            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection