@extends('layouts.app')

@section('header', "Welcome to Code Review.Com")

@section('content')
    <p> Recent posts...</p>
    <div id="allposts" class="mx-auto">
            @foreach ($posts as $post)
                
                    <div class="card mb-3 mx-auto" style="width: 55rem;">
                        <div class="card-header text-white bg-secondary">
                            <u> <a href = "{{route('post.show', ['id' => $post->id])}}" class="link-dark">{{$post->title}} </a> </u>
                            <u class="link-dark"> by {{$post->user_id}} </u>
                        </div>
                        @if ($post->image != null)
                        <img class="card-img-top imgsizing mx-auto" src= "{{$post->image->path}}" alt="Card image cap">
                        @endif
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
                                <form method="GET" action="{{route('posts.edit', ['id' => $post->id])}}">
                                    <input type="submit" value="Edit" >
                                </form>
                                <form method="POST" action="{{route('posts.delete', ['id' => $post->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" >
                                </form>
                            </div>
                        @endif
                    </div>
                    </div>
                
            @endforeach
        </div>
        
    </div>   

    <script>
        var postbuttons = new Vue ({
            el: "#postbuttons",   
            methods: {
            }
        });
        
    </script> 
@endsection 