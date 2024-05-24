@extends('layouts.app')

@section('content')   
  <h1 class="text-center mt-5">Login Form<a href="{{ route('registerroute') }}">Go to Registration Forms</a></h1>
   <form method="POST" action="">
       <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter your email">
       </div>
            
           <div class="mb-3">
            <label for="inputPassoword5" class="form-label">Password</label>
            <input type="Password" id="inputPassoword5" class="form-control" aria-describedby="passwordHelpBlock">
            <div class="form-text-custom">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
             
         
            <input type="submit" onclick="return custom()" class="btn btn-primary" />
            
          <div>
        </form>
@endsection




