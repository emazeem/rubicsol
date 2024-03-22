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
}