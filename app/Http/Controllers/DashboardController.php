<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // show user Dashboard
    public function showDashboard($userId){

        // fetch user data from database
        $user = DB::table("users")->where('id',$userId)->first();
        

        // if we have user data, then show dashboard
        if($user != NULL){
            return view('dashboard',['user'=>$user]);
            
        }
        else{
            // redirect to login page
            return redirect("/login");
        }


    }
}
