<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:225'],
            'description' => ['required', 'max:225',],
            'document_upload'=> ['required', 'max:225'],
        ]);

        $p = new Post();
        $p->user_id = Auth::id();
        $p->title = $validatedData['title'];
        $p->description = $validatedData['description'];
        $p->document_upload = $validatedData['document_upload'];
        $p->save();

        session()->flash('Message', 'Post created!');
        return redirect()->route('user.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:225'],
            'description' => ['required', 'max:225',],
            'document_upload'=> ['required', 'max:225'],
        ]);

        Post::find($id)->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'document_upload' => $validatedData['document_upload'],
        ]);

        session()->flash('Message', 'Post edited!');
        return redirect()->route('user.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }

    public function apiIndex()
    {
        $posts = Post::all();
        return $posts;
    }
}
