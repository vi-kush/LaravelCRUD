<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

class verify extends Controller
{
    function log(Request $req){
        
        $email = $req->input('email');
        $password = md5($req->input('password'));

        $userdata=login::where('useremail',$email)->first();
        
        //return $userdata;
    
        if($userdata->userpass == $password){
            session(['user'=>$userdata->username, 'id'=>$userdata->id]);
            return redirect('tasks');
        }
        else{
            session()->flash('login_error','Wrong User Email or Password');
            return redirect('login');
        }
    }
}
