<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Services\Twitter;
use App\Mail\UserNotification;
use Illuminate\Support\Facades\Mail;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function apiStore(Request $request)
    {
        $request->validate([
            'post_id'=>['required'],
            'user_id'=>['required'],
        ]);
        
        $p = Post::findOrFail($request['post_id']);

        $l = new Like();
        $l->post_id = $request['post_id'];
        $l->user_id = $request['user_id'];
        $l->save();
        
        $p->likes()->attach($l);

        $u = User::findOrFail($request['user_id']);
        Mail::to($u->email)->send(new UserNotification($u, $p, ""));

        return redirect()->route('api.post.comments', ['id' => $request['post_id']]);
    }

    public function twitterLike($id)
    {
        $t = app()->make(Twitter::class);
        $t->like($id);
    }
}
