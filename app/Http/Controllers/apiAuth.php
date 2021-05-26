<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\login;
use App\Models\User;

class apiAuth extends Controller
{
    public function register(Request $req){

        $data=$req->validate([
            'name'=>'required|string',
            'password'=>'required|string',
            'email'=>'required|unique:logins,useremail',
        ]);

        
        // $log = User::create([
        //     'name'=> $data['name'],
        //     'email'=>$data['email'],
        //     'password'=>md5($data['password']),
        // ]);

        //$token = 'helloatg';
        
        
        
        $login = new login;
        //$login->id = $userdata->id;
        $login->username = $req->name;
        $login->useremail = $req->email;
        $login->userpass = md5($req->password);
        $login->save();
        
        $token = $login->createToken('helloatg')->plainTextToken;
        
        $userdata=login::where('useremail',$req->email)->first();

        $response = [
            'user_id'=> $userdata->id,
            'user_name'=> $userdata->name,
            'user_email'=> $userdata->email,
            'token' => $token,
        ];
            
        return response($response,201);
    }
}
