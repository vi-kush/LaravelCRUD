<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class apiAuth extends Controller
{
    public function register(Request $req){

        $data=$req->validate([
            'name'=>'required|string',
            'password'=>'required|string',
            'email'=>'required|unique:users,email|email',
        ]);

        
        $log = User::create([
            'name'=> $data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
        
        $token = $log->createToken('helloatg')->plainTextToken;
        
        $userdata=$log::where('email',$req->email)->first();

        $response = [
            'user_id'=> $userdata->id,
            'user_name'=> $userdata->name,
            'user_email'=> $userdata->email,
            'token' => $token,
        ];
            
        return response($response,201);
    }

    public function getToken(Request $request){

        $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //return $credentials;
        if(Auth::attempt($cred)){
            
            $token = $request->user()->createToken('HelloAtg');
            $response = [
                'user_id'=> Auth::id(),
                'user_name'=> Auth::user()->name,
                'user_email'=> Auth::user()->email,
                'token' => $token->plainTextToken,
            ];
        }else{
            $response = [
                'Error'=>'Invalid Credentials',
            ];
        }
        return response($response,201);
    }

    public function revokeToken(Request $request){

        $request->user()->currentAccessToken()->delete();

        return ['Status'=>'Token Removed'];
    }

}

