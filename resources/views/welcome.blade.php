


<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <h1 style="text-align: center"> Welcome!</h1>
            
            <p style="text-align: center"> Sign in or Register an account. </p>

            <a href = {{route( 'login' )}}> Sign In </a>

            <a href = {{route( 'users.create' )}}>Register</a>
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

    
       
    
