<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        //
        return view('index', [
            'posts' => DB::table('posts')->paginate(15)
        ]);
    }


    public function create()
    {
        //
        return view('create');
    }


    public function store(Request $request): RedirectResponse
    {
        //
        $post = new Post();
        $post->title = $request->postTitle;
        $post->content = $request->postContent;
        $post->save();
        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        //
        return view('show', ['post'=>$post]);
    }


    public function edit(Post $post)
    {
        //
        return view('edit', ['post'=>$post]);
    }


    public function update(Request $request, Post $post)
    {
        //
        $postUpdate = Post::findOrFail($post->id);
        $postUpdate->title = $request->postTitle;
        $postUpdate->content = $request->postContent;
        $postUpdate->save();
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post): RedirectResponse
    {
        //
        $postDelete = Post::findOrFail($post->id);
        $postDelete->delete();
        return redirect()->route('posts.index');
    }
}
