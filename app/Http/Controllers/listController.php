<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\task;

class listController extends Controller
{
    function show(){
        $data = login::find(session('id'))->tasks()->orderByDesc('created_at')->get();
        //return $data->toArray();
        return view('lists',['data'=>$data->toArray()]);
    }

    function update(Request $req){

        $id = $req->pending??$req->done;
        $status = ($req->pending?'done':'pending');

        $data = task::find($id);
        $data->status = $status;
        $data->save();

        session()->flash('success','Done');
        return redirect('list');
    }
}
