<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<div class="bg-cover bg-center backgroundImage">
    <div id = "welcome" class="center">
        <h1 style="text-align: center"> Please register below!</h1>

            <p> Name: <input type="text" id = "name" v-model="newName"> </p>
            <p> Username:  <input type="text" id="username" v-model="newUsername"> </p>
            <p> Password: <input type="text" id="password" v-model="newPass"> </p>
            <p> email: <input type="text" id="email" v-model="newEmail"> </p>
            <button @click="Register" id="regButton">Register</button>

            <a href="{{ route('welcome') }}">
                    {{ __('Already registered?') }}
            </a>
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
        methods:{
            Register:function(){
                //gets to here but stops??
                axios.post("{{route('api.users.store')}}", {
                    name: this.newName,
                    username: this.newUsername,
                    password: this.newPass,
                    email: this.newEamil,
                }) .then(reponse=>{
                    //clear the textboxes
                    this.newName='';
                    this.newUsername='';
                    this.newPass='';
                    this.newEmail='';
                }) .catch(response=>{
                    console.log(reponse);
                })
            }
        }
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