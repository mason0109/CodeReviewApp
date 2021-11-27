@extends('layouts.app')

@section('header', "Welcome to Code Review.Com")

@section('content')
    <p> Recent posts...</p>
    <div id="allposts">
        <ul>
            <li v-for="post in posts">
                <div class="post-display">
                    <div class="post-title">
                    <u> @{{ post.title }}  </u>
                    <u> by @{{post.user_id}} </u>
                    </div>
                    <div class="post-description">
                    @{{post.description}}
                    </div>
                    <div class="post-content">
                    @{{ post.upload }}
                    </div>
                    <div class="post-bottom">
                        <div class = "bottom-item">
                            Likes: @{{post.num_of_likes}}
                        </div>
                        <div class = "bottom-item">
                            Reviews: @{{post.num_of_reviews}}
                        </div>
                        <div class = "bottom-item">
                            Comments: @{{post.num_of_comments}}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <script>
            var app = new Vue ({
                el: "#allposts",
                data: {
                    posts: [],
                }, 
            mounted() {

            axios.get("{{route('api.posts.index')}}")
                .then(response=>{
                    this.posts = response.data;
                })
                .catch(response=>{
                    console.log(response);
                })
            }
        });
    </script> 
@endsection 