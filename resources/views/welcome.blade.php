


<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <h1 style="text-align: center"> Welcome!</h1>
            <form method="GET" action="{{ route ('user.home') }}">
                @csrf
                <p style="text-align: center"> Sign in or Register an account. </p>
                <p> Username:  <input type="text" id="username"> </p>
                <p> Password: <input type="test" id="password"> </p>

                <input type="submit" value="sign in">

                <a href = {{route( 'users.create' )}}>Register</a>
            </form>
    </div> 
</div>

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
    </style>

    
       
    
