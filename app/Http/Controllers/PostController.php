<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Post::get();

        return view ('posts.index', ['posts' => $posts]);
    } 

    public function show( Post $post){
        return view('posts.show', ['post'=>$post]);
    }

    public function create(Post $post){
        return view('posts.create', ['post'=>$post]);
    }

    public function store(Request $request){
        $post = new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();

        session()->flash('status','Post created!');

        return to_route('posts.index');
    }
}
