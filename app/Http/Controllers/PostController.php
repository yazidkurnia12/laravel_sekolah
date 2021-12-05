<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        $post = post::all();
        // dd($post);
        return view('posts.index', compact(['post']));

    }

    public function add()
    {
        return view('posts.add');
    }

    public function create(Request $request)
    {
        $post = post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'thumbnail' => $request->thumbnail,
        ]);

        return redirect()->route('post.news')->with('sukses', 'Postingan berhasil dipublish');
    }
}
