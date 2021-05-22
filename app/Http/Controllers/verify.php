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

        $userpass=login::where('useremail',$email)->value('userpass');
        
        $user=login::where('useremail',$email)->value('username');
        

        //return strcmp($userpass,$password);
        if($userpass == $password){
            session(['user'=>$user]);
            return redirect('tasks');
        }
        else{
            session()->flash('error','Wrong User id or password');
            return redirect('login');
        }
    }
}
