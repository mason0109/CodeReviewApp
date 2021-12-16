<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //
        $comment = Comment::all(); 
        return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiStore(Request $request){
        $c = new Comment();
        $c->author_id=$request['author_id'];
        $c->comment_content=$request['comment_content'];
        $c->num_of_comments=0;
        $c->save();
        return $c;
    }

    public function apiPostComments($id){
        $post = Post::findOrFail($id);
        $comments = $post->comments()->get();
        return $comments;
    }

    public function apiCommentStore(Request $request){
        $validatedData = $request->validate([
            'comment_content' => ['required', 'max:400'],
            'commentable_id' => ['required'],
            'commentable_type' => ['required'],
            'user_id' => ['required'],
        ]);

        $c = new Comment();
        $c->user_id = $validatedData['user_id'];
        $c->comment_content = $validatedData['comment_content'];
        $c->commentable_id = $validatedData['commentable_id'];
        $c->commentable_type = $validatedData['commentable_type'];
        $c->save();

        return $c;
    }
}
