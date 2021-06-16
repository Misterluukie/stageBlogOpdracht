@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container max-w-60 mx-auto pt-4">
            <h2 class="font-bold text-3xl mb-2">Create</h2>
            <form method="POST" action="/posts">
                @csrf

                <div class="mb-4">
                    <label for="title" class="text-gray-800">Title: </label>
                    <input type="text" id="title" name="title"
                        class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" />
                </div>

                <div class="mb-4">
                    <label for="content" class="text-gray-800">Content: </label>
                    <textarea id="content" name="content"
                        class="h-20 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"></textarea>
                </div>

                <button
                    class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection