<?php

namespace App\Http\Controllers;
use App\User;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{    
    // show login page
    public function showLogin(){
        return view("login");
    }

    // show registration page
    public function showRegister(){
        return view("registration");
    } 

    // login user
    public function loginUser(Request $request){
          
        // check all the field 
        request()->validate([
            'email' => "required|email",
            'password' => "required"

        ]);
        

        // check is user persent or not
        $isUserExist = DB::table('users')->where('email', $request->email)->first();
        // $isUserExist = User::where('email',$request->email);

        // is user persent
        if($isUserExist != NULL){
             
            echo $isUserExist->id;

            // compair password
            $checkPass = password_verify($request->password,$isUserExist->password);
             
            echo $checkPass;

            if($checkPass){
                 
                // create a Session_Token

                // Store Session_Token to Cookie

                // redirect to profile page
                return redirect('/user/dashboard'.$isUserExist->id);

            }
            else{
               echo "Invalid Credentials";
            }

        }
        else{
            echo "Invalid Credentials";
        }
    }

    // register user
    public function registerUser(Request $request ){
         echo $request;

         // check all the field are required
         request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',   
            'email'=> 'required|unique:users|email',
            'age' => 'required|numeric|max:150',
            'phone'=> 'required|numeric|digits:10',
            'password' => 'required|min:4|max:10',
            'confirm_password' => 'required|same:password',

         ]);
         
         $user =new User;
         $user->firstName = $request->firstName;
         $user->lastName = $request->lastName;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->age = $request->age;
         $user->password = password_hash($request->password, PASSWORD_BCRYPT); 


        if( $user->save() ){
         echo "user registered successfully";

         return redirect("/login");

        }
        else{
         echo "Unable to registered";

        }

        echo "user created ";



      

    }


    // login user


    // get uer data


    // 




}
