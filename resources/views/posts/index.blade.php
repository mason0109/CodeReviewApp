@extends('layouts.app')

@section('header', "Welcome to Code Review.Com")

@section('content')
    <p> Recent posts...</p>
    <div id="allposts">
        <ul>
            @foreach ($posts as $post)
                <div class = "row">
                    <div class="card mb-3" style="width: 35rem;">
                        <div class="card-header text-white bg-secondary">
                            <u> <a href = "{{route('post.show', ['id' => $post->id])}}">{{$post->title}} </a> </u>
                            <u> by {{$post->user_id}} </u>
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
                                <button  @click="increaseLike">Like</button>
                                Reviews: {{$post->num_of_reviews}}
                                <button @click="review">Review Post</button>
                            </div>  
                        </div>
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
                increaseLike: function(){
                    alert("increase like");
                },
                review: function(){
                    alert("Review item");
                },
            }
        });
        
    </script> 
@endsection 