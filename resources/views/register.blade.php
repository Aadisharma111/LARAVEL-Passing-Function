@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Registration Form  <a href="{{ route('loginroute') }}">Go to Login Forms</a></h1>
    <form method="POST" action="/user">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Email">
        </div>
        <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input name="password" type="password" id="inputPassword5" class="form-control pass" aria-describedby="passwordHelpBlock">
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input name="cpassword" type="password" id="cpassword" class="form-control cpass" aria-describedby="passwordHelpBlock">
        </div>
        <input type="submit" onclick="return custom()" class="btn btn-primary" />
    </form> 
    <script>
        function custom(){
    
            var p = document.querySelector('.pass').value;

            console.log('p>>',p);

            var cp = document.querySelector('.cpass').value;

            console.log('cp>>',cp);

            if(p == cp){
                return true
            }else{
                alert("Password and Confirm password dose not match")
            }

            return false;
        }

    </script>
@endsection
