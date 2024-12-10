<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('backoffice.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('backoffice.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->route('backoffice.posts.index')->with('success', 'Post creado con éxito.');
    }

    public function show(Post $post)
    {
        return view('backoffice.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('backoffice.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
        ]);

        $post->update($request->all());

        return redirect()->route('backoffice.posts.index')->with('success', 'Post actualizado con éxito.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('backoffice.posts.index')->with('success', 'Post eliminado con éxito.');
    }
}
