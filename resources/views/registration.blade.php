
@extends('formLayout')





@section('form_heading')
 <h2> Register Here </h2>
@endsection


@section('create_form')
 <form method="post" action="/user/register" class="form-sec" >
    {{csrf_field()}}
     <div class="form-field-sec" > 
        <label class="form-lable" >First Name : </label> <br> 
        <input  class="form-input" type="text"  placeholder="John" name="firstName" value="{{old('firstName')}}"/>
        @error('firstName')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>

     <div class="form-field-sec"> 
        <label class="form-lable">Last Name : </label> <br>
        <input class="form-input" type="text"  placeholder="Doe" name="lastName" value="{{old('lastName')}}"/>
        @error('lastName')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>

 <div class="form-field-sec"> 
        <label class="form-lable"> Email : </label> <br>
        <input class="form-input" type="email"  placeholder="xyz@abc.com" name="email" value="{{old('email')}}"/>
        @error('email')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>


 <div class="form-field-sec"> 
        <label class="form-lable"> Phone : </label> <br>
        <input class="form-input" type="number"  placeholder="9898989898" name="phone" value="{{old('phone')}}"/>
        @error('phone')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>

     <div class="form-field-sec"> 
        <label class="form-lable">Age : </label> <br>
        <input class="form-input" type="number"  placeholder="xyz@abc.com" name="age" value="{{old('age')}}"/>
        @error('age')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>

     <div class="form-field-sec"> 
        <label class="form-lable"> Password : </label> <br>
        <input class="form-input" type="password"  placeholder="########"  name="password" value="{{old('password')}}"/>
        @error('password')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>
    
     <div class="form-field-sec"> 
        <label class="form-lable" >  Confirm Password : </label> <br>
        <input class="form-input" type="password"  placeholder="########"  name="confirm_password" value="{{old('confirm_password')}}"/>
        @error('confirm_password')
           <div class="error"> {{$message }} </div>
        @enderror
     </div>
    
     <button type="submit" name="registerUser" class="form-btn"> Submit </button>
</form>

@endsection
  

@section('bottom_heading')
  <p> Already have an Account? <a href="login"> Login Here </a> </p>
 
@endsection