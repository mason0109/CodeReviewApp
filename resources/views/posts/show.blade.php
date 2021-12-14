@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div id="post" class="mx-auto">
            <div class="card mb-3 mx-auto" style="width: 55rem;">
                    <div class="card-header text-white bg-secondary">
                        <u> <a href = "{{route('post.show', ['id' => $post->id])}}" class="link-dark">{{$post->title}} </a> </u>
                        <u class="link-dark">  by {{$post->user->username}} </u>
                    </div>
                    
                    <img class="card-img-top imgsizing mx-auto" src= "{{$post->image()->path}}" alt="Card image cap">
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
        <div class = "row">
            <div class="card mb-3 col" style="width: 35rem;"> 
                    <div class= "card-header text-white bg-secondary">
                        Comments: {{$post->num_of_comments}}
                    </div>
                    <div class="card-body ">
                        <div class = "comments">
                            <div id="getcomments">
                                <div v-for="comment in comments">
                                    <div class = "comment-author">
                                        @{{comment.user_id}}
                                    </div>  
                                    <div class = "comment-content">
                                        @{{comment.comment_content}}
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
                        alert('hi');
                            axios.post("{{route('api.comments.store', ['id' => $post->id ])}}", {
                                comment_content: this.newcomment
                            })
                            .then (response=> {
                                this.comments.push(response.data);
                                this.newcomment = '';
                            })
                            .catch(response=>{
                                console.log(response);
                            })
                    }
                }
            
        });

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
