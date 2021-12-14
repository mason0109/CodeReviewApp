@extends('layouts.app')

@section('header', "Welcome to Code Review.Com")

@section('content')
    <p> Recent posts...</p>
    <div id="allposts">
        <ul>
            @foreach ($posts as $post)
                <div class = "row">
                    
                    <div class="card mb-3 col" style="width: 50rem;">
                        <div class="card-header text-white bg-secondary">
                            <u> <a href = "{{route('post.show', ['id' => $post->id])}}" class="link-dark">{{$post->title}} </a> </u>
                            <u class="link-dark"> by {{$post->user_id}} </u>
                        </div>
                    
                        <div class="card-body ">
                            <div class="post-description">
                                {{$post->description}}
                            </div>
                            <div class="post-content">
                                {{ $post->upload }}
                            </div>
                            <div id="postbuttons" class="postButton card-footer text-muted">
                                Likes: {{$post->num_of_likes}} 
                                Reviews: {{$post->num_of_reviews}}
                            </div>  
                        </div>

                        @if (($post->user_id == Auth::id()) || (Auth::User()->type == "admin"))
                            <div class = "menu-item-left">
                                <form method="GET" action="{{route('posts.edit')}}">
                                    <input type="submit" value="Edit" >
                                </form>
                                <form method="DELETE" action="{{route('posts.delete')}}">
                                    <input type="submit" value="Delete" >
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </ul>
    </div>   

    <script>
        var postbuttons = new Vue ({
            el: "#postbuttons",   
            methods: {
            }
        });
        
    </script> 
@endsection 