<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\login;
use App\Models\task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class listController extends Controller
{
    function show(){
        $data = User::find(Auth::id())->tasks()->orderByDesc('created_at')->get();
        //return $data->toArray();
        return view('lists',['data'=>$data->toArray()]);
    }

    function update(Request $req){

        if($req->has('delete'))
            
            task::find($req->delete)->delete();
        else{

            $id = $req->pending??$req->done;
            $status = ($req->pending?'done':'pending');

            $data = task::find($id);
            $data->status = $status;
            $data->save();
        }
        session()->flash('success','Done');
        return redirect('list');
    }
}
