<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <form method="POST" action="{{ route ('users.store') }}">
            @csrf
            <h1 style="text-align: center"> Please register below!</h1>

            @if ($errors->any())
            <div class = "error-message">
                Errors:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <p> Name: <input type="text" name = "name" 
                value="{{ old('name') }}"> </p>
            <p> Username:  <input type="text" name="username" 
                value="{{ old('username') }}"> </p>
            <p> Password: <input type="text" name="password" 
                value="{{ old('password') }}"> </p>
            <p> email: <input type="text" name="email" 
                value="{{ old('email') }}"> </p>
            <input type="submit" value="submit">

            <a href="{{ route('welcome') }}">
                    {{ __('Already registered?') }}
            </a>
        </form>
    </div> 
</div>


<script>
    var app = new Vue({
        el: "#welcome",
        data: {
            newName: '',
            newUsername: '',
            newPass: '',
            newEmail: '',
        },
    })
    </script>
    
    <style>
        .center{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid black;
            padding: 90px;
            background-color: pink;
        }
        .regButton{
            padding-right: 40px;
        }
    </style>