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
                        <u> {{$post->title}}  </u>
                        <u> by {{$post->user_id}} </u>
                    </div>
                    
                    <div class="card-body ">
                        <div class="post-description">
                            {{$post->description}}
                        </div>
                        <div class="post-content">
                            {{ $post->upload }}
                        </div>
                        <div class="postButton card-footer text-muted">
                            Likes: {{$post->num_of_likes}}
                            <button @click="increaseLike()" id="likeButton">Like</button>
                            Reviews: {{$post->num_of_reviews}}
                            <button @click="review" id="reviewButton">Review Post</button>
                        </div>  
                    </div>
                </div>
                
                <div class ="card mb-3" style="width: 35rem;">
                    <div class= "card-header text-white bg-secondary">
                        Comments: {{$post->num_of_comments}}
                    </div>
                    <div class="card-body ">
                        <div class = "comments">
                            @foreach ($post->comments as $comment)
                                <div class = "comment-auhtor">
                                    {{$comment->user_id}}:
                                </div>  
                                <div class = "comment-content">
                                    {{$comment->comment_content}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class = "postButton card-footer text-muted">
                            <input type="text" id="commentbox" v-model="newComment">
                            <button @click="comment" id="commentButton">Comment</button>
                    </div>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </ul>
    </div>

    <script>
            var app = new Vue ({
                el: "#allposts",
                data: {
                    comments: [],
                    newComment: '',
                }, 
           

            methods:{
                increaseLike:function(){
                    alert("increase like")
                },
                review:function(){
                    alert("Review item")
                },
                comment:function(){
                    alert("make comment");
                }
            }
        });
    </script> 
@endsection 