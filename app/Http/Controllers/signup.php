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
                'name' => 'alpha',
                'email'=>'required | unique:logins,useremail',
                'password'=> 'required | min:8'
            ]
        );

        $db = new login;
        $db->username = $req->name;
        $db->useremail = $req->email;
        $db->userpass = md5($req->password);
        $db->save();

        session(['user'=>$req->name]);
        return redirect('tasks');
    }
}
