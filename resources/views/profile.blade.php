<html>
    @extends('layouts.app')

    @section('title', 'CodeReviewProfile')

    @section('content')
            <div class="p-3 mb-2 bg-info text-white profile-header">
            <img src = "https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" class = "img">
            <h2 class="p-3 mb-2 bg-info text-white">{{$user->username}}'s Profile</h2>
            </div>
            @foreach ($posts as $post)
                <div class = "row">
                    
                    <div class="card mb-3 col-8" style="width: 50rem;">
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
            <div class = "card mb-3 col-8" style="width: 50rem;">
                <div class="card-header text-white bg-secondary">
                    Followers:
                </div>
                <div class="card-body ">
                    @foreach ($user->followers as $follower)
                        <ul>
                            <li>{{$follower->username}}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class = "card mb-3 col-8" style="width: 50rem;">
                <div class="card-header text-white bg-secondary">
                    Following:
                </div>
                <div class="card-body ">
                    @foreach ($user->following as $follower)
                        <ul>
                            <li>{{$follower->username}}</li>
                        </ul>    
                    @endforeach
                </div>
            </div>
        
            
    <script>
            var app = new Vue ({
                el: "#alluserposts",
                data: {
                    comments: [],
                    newComment: '',
                }, 
            mounted() {
            
            axios.get("{{route('api.users.userPosts', ['id' => Auth::id()])}}")
                .then(response=>{
                    this.posts = response.data;
                })
                .catch(response=>{
                    console.log(response);
                })
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
</html>