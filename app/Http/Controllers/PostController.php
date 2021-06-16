<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $posts = Post::all();
        
    //     return view('posts.index', compact('posts'));
    // }

    public function viewPost(Post $post){
        return view('posts.singlePost', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/admin');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/admin');
    }

    public function delete(Post $post){
       $post->delete();

       return redirect('/admin');
    }

}
