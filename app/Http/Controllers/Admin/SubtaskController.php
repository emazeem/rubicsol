<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    public function store(Request $request){
        $this->validate(request(), [
            'description' => 'required',
            'status' => 'required', 
        ],
            [
                'description.required' => 'description field is required *',
                'status.required' => 'status field is required *',
            ]);

        $subtask=new Subtask();
        $subtask->task_id=$request->id;
        $subtask->description=$request->description;
        $subtask->status=$request->status;
        $subtask->save();
        return response()->json(['success'=>'Subtask added successfully','id'=>$task->id]);
}

}
