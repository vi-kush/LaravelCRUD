<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Validation;

class signup extends Controller
{
    function sign(Request $req){

        $req->validate(
            [
                'name' => 'alpha_dash',
                'email'=>'required | unique:logins,useremail',
                'password'=> 'required | min:8'
            ]
        );

        $db = new login;
        $db->username = $req->name;
        $db->useremail = $req->email;
        $db->userpass = md5($req->password);
        $db->save();

        $userdata=login::where('useremail',$req->email)->first();

        session(['user'=>$userdata->username, 'id'=>$userdata->id]);
        return redirect('tasks');
    }
}
