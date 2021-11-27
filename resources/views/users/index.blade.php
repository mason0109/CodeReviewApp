@extends('layouts.app')

@section('header', "Welcome to Code Review.Com")

@section('content')
        <h1> All users online?? </h1>
        <div id="allusers">
            <ul>
                <li v-for="user in users">
                    @{{ user.username }}
                </li>
            </ul>
        </div> 

        <script>
            var app = new Vue ({
                el: "#allusers",
                data: {
                    users: [],
                }, 
            mounted() {

            axios.get("{{route('api.users.index')}}")
                .then(response=>{
                    this.users = response.data;
                })
                .catch(response=>{
                    console.log(response);
                })
            }
            });
        </script>    
@endsection 