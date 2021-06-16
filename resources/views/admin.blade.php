@extends('layouts.app')

@section('title', 'Admin panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>


            </div> <br><br>
            <div class="card">
                <div class="card-header">{{ __('Posts') }} <a href="/posts/create" class="float-right">Add new</a></div>
                <div class="card-body">
                    @foreach ($posts as $post)
                    <article class="border-b border-black border-solid p-2 mb-3">
                        <div class="m-0 inline-block">
                            <h2 class="text-xl font-bold mb-2"><a href="/posts/{{$post->id}}/view">{{$post->title}}</a>
                            </h2>
                            <p class="text-md"> {{$post->content}} </p>
                            <span class="mt-4 block">Created at: {{$post->created_at}}</span>
                        </div>

                        <div class="">
                            {{-- w-15 m-0 inline-block absolute right-1 --}}
                            <form action="/posts/{{$post->id}}/delete" class="inline-block">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-600">Delete</button>
                            </form>

                            <a href="/posts/{{$post->id}}/edit" class="text-blue-600 float-left mr-2">Edit</a>
                        </div>
                    </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection