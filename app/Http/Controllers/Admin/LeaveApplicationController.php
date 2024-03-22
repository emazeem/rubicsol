<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    public function index()
    {
        $leaves = LeaveApplication::all();
        return view('admin.leaves.index', compact('leaves'));
    }

    public function create()
    {
        return view('admin.leaves.create');
    }
    public function edit($id)
    {
        $leaves = LeaveApplication::find($id);
        return view('admin.leaves.create');
    }
    public function store(Request $request){
        $this->validate(request(), [
            'start' => 'required',
            'end' => 'required', 
            'remarks' => 'required',  
        ],
            [
                'start.required' => 'start field is required *',
                'end.required' => 'end field is required *',
                'remarks.required' => 'remarks is required *',
            ]);

        $leave=new LeaveApplication();
        $leave->user_id=auth()->user()->id;
        $leave->status=0;
        $leave->start=$request->start;
        $leave->end=$request->end;
        $leave->remarks=$request->remarks;
        $leave->save();
        return response()->json(['success'=>'Task added successfully','id'=>$leave->id]);
}
//upadte leave form
public function update(Request $request){
    $this->validate(request(), [
        'user' => 'required',
        'start' => 'required',
        'end' => 'required',
        'status' => 'required',   
        'remarks' => 'required',  
           
    ],
        [
            'user.required' => 'user field is required *',
            'start.required' => 'start field is required *',
            'end.required' => 'end field is required *',
            'status.required' => 'status is required *',
            'remarks.required' => 'remarks is required *',
        ]);

    $leave= leave::find($request->id);
    $leave->user_id=$request->user_id;
    $leave->user=$request->user;
    $leave->start=$request->start;
    $leave->end=$request->end;
    $leave->status=$request->status;
    $leave->remarks=$request->remarks;
    $leave->day=date('l');
    $leave->worked_hours=0;
    $leave->status=$request->status;
   // $leave->leave_id=;
    $leave->remarks='marked by user';
    $leave->save();
    return response()->json(['success'=>'leave updated successfully']);

    
}
}