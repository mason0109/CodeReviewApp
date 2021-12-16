@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div id="post" class="mx-auto">
            <div class="card mb-3 mx-auto" style="width: 55rem;">
                    <div class="card-header text-white bg-secondary">
                        <u> <a href = "{{route('post.show', ['id' => $post->id])}}" class="link-dark">{{$post->title}} </a> </u>
                        <u class="link-dark">  by {{$post->user->username}} </u>
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
                            Likes: {{$post->likes->count()}} 
                            <button  @click="increaseLike">Like</button>
                            Reviews: {{$post->num_of_reviews}}
                            <button @click="review">Review Post</button>
                            Posted: {{$post->created_at}}
                        </div>  
                    </div>

                </div>
             </div>
        <div class = "row">
            <div class="card mb-3 col" style="width: 35rem;"> 
                    <div class= "card-header text-white bg-secondary">
                        Comments: {{$post->comments->count()}}
                    </div>
                    <div class="card-body ">
                        <div class = "comments">
                            <div id="getcomments">
                                <div v-for="comment in comments">
                                    <div class = "comment-author">
                                        @{{comment.user_id}}, posted @{{comment.created_at}}
                                    </div>  
                                    <div class = "comment-content">
                                        @{{comment.comment_content}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "postButton card-footer text-muted">
                    <input type="text" id="commentbox" v-model="newcomment">
                    <button @click="comment">Comment</button>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var getcomments = new Vue ({
            el: "#getcomments",
            data: {
                comments: [],
                newcomment: '',
                commentableID: '{{$post->id}}',
                commentableType: 'App\\Models\\Post',
            },
            mounted() {
                axios.get("{{route ('api.post.comments', ['id' => $post->id ])}}")
                    .then(response=>{
                        this.comments = response.data;
                    })
                    .catch(response=>{
                        console.log(response);
                    })
            },
            methods: {
                comment: function(){
                        axios.post("{{route('api.comments.store')}}", {
                            comment_content: this.newcomment,
                            commentable_id: this.commentableID,
                            commentable_type: this.commentableType,
                        })
                        .then (response=> {
                            this.comments.push(response.data);
                            this.newcomment = '';
                        })
                        .catch(response=>{
                            console.log(response);
                        })
                },
            }
        });

        var postbuttons = new Vue ({
            el: "#postbuttons",  
            data: {
                userID: "{{Auth::id()}}",
                postID: "{{$post->id}}",
            },
            methods: {
                increaseLike: function(){
                    axios.post("{{route ('api.post.like', ['id' => $post->id ])}}", {
                        user_id: this.userID,
                        post_id: this.postID,
                    })
                    .then(response=> {
                        location.reload();
                    }) .catch(response=>{
                        console.log(response);
                    })
                },
                review: function(){
                    alert("Review item");
                },
            }
        });
            
    </script>

@endsection
