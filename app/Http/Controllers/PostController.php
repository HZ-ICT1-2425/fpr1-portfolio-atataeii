<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        return view('blog')->with('posts', $posts);
    }
    public function create()
    {
        return view ('blog-posts.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image_path' => 'nullable',
        ]);

        $posts = new Post();
        $posts->title = $data['title'];
        $posts->body = $data['body'];
        $posts->image_path = $data['image_path'];
        $posts->save();

        return redirect('/posts')->with('success', 'New FAQ Created Successfully');
    }
    public function show($page) {
        return view('posts.' . $page);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog-posts.edit', compact('post'));

    }
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image_path' => 'nullable',
        ]);
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->image_path = $data['image_path'];
        $post->save();

        return redirect('/posts');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }

}
