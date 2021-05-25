<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{
    //
    function add(Request $req){
        
        $tasks = filter_var($req->input('task'),FILTER_SANITIZE_STRING);
        $login_id = session('id');
        //$status = "pending";

        $res = false;
        if($tasks!=''){
            $data = new task;
            $data->task = $tasks;
            $data->login_id = $login_id;
            //$data->status = $status;
            $res = $data->save();  
        }
    
        if($res) session()->flash('add_success','Task added!!');
        else session()->flash('add_error',true);

        return redirect('tasks');
    }
}

