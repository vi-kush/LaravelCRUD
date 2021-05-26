<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Models\login;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validator::make($request->all(),[
           
        //     'task'=>'required',
        //     'login_id'=>['bail' , 'required', Rule::exists('login_id')->where(function($query) {
        //             return $query()->where('login_id', $request->login_id);
        //         }
        //     )],
        // ]);
        
        $data = $request->validate([
            'task'=>'required|string',
            'user_id'=>'required|numeric'
        ]);

        if(!login::find($data['user_id'])){
            return ['status'=>0 , 'error'=> 'ID not in Records. Please enter Valid User_id'];
        }

        $task = new task;
        $task->login_id = $data['user_id'];
        $task->task = $data['task'];
        $task->save();

        $response = [
            'taskObject'=> $task,
            'status'=> 1,
            'message'=> 'Successfully Created',
        ];
            
        return response($response,200);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function status(Request $request)
     {
        $data = $request->validate([
            'task_id'=>'required|numeric',
            'status'=>'required|string'
        ]);

        if(!task::find($data['task_id'])){
            return ['status'=>0 , 'error'=> 'ID not in Records. Please check Task_id'];
        }

        $task =task::find($data['task_id']);
        $task->status = $data['status'];
        $task->save();

        $response = [
            'taskObject'=> $task,
            'status'=> 1,
            'message'=> 'Marked Task as '.$task->status,
        ];
            
        return response($response,200);
        
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
