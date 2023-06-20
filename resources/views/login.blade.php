
@extends('formLayout')


@section('title')
Login page
@endsection


@section('form_heading')
 <h2> Login Here </h2>
@endsection


@section('create_form')
 <form method="post" action="/user/login" class="form-sec">
     
     <div class="form-field-sec"> 
        <label class="form-lable">Email : </label> <br>
        <input class="form-input" type="email" required placeholder="xyz@abc.com" name="email"/>
        @error('email')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>

     <div class="form-field-sec"> 
        <label class="form-lable"> Password : </label> <br>
        <input class="form-input" type="password" required placeholder="########"  name="password"/>
        @error('password')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>
    
     <button type="submit" name="loginUser" class="form-btn" > Submit </button>
</form>

@endsection
  

@section('bottom_heading')
  <p> Don't have an Account? <a href="register"> SignUp Here </a> </p>
 
@endsection