<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function serviceTesting(User $service)
    {
        dd(service);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'name' => ['required', 'max:225'],
            'username' => ['required', 'max:225', 'unique:users,username'],
            'password'=> ['required', 'max:150'],
            'email' => ['required', 'max:225', 'unique:users,email', 'email:rfc,dns'],
        ]);

        $u = new User();
        $u->name = $validatedData['name'];
        $u->username = $validatedData['username'];
        $u->password = $validatedData['password'];
        $u->email = $validatedData['email'];
        $u->save();

        session()->flash('Message', 'Account created!');
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
        $user = User::findOrFail($id);
        $posts = $user->posts()->get();

        return view('profile', ['user' => $user, 'posts' => $posts]);
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

    public function auth(Request $request){

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
        
        // $details = $request->only('username');

        // if (Auth::attempt($details)) {
        //     $posts = Post::all();
        //     return redirect()->intended('posts.index', ['posts' => $posts]);
        // } else {
        //     return "Not Authenticated.";
        // }
    }

    public function apiIndex()
    {
        $users = User::all();
        return $users;
    }

    public function apiUserPosts($id)
    {
        $posts = User::findOrFail($id)->posts()->get();
        return $posts;
    }
}
