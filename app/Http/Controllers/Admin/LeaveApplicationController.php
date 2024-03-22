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
        $edit = LeaveApplication::find($id);
        return view('admin.leaves.edit',compact('edit'));
    }
    public function show($id)
    {
        $show = LeaveApplication::find($id);
        return view('admin.leaves.show',compact('show'));
    }
    public function delete($id)
    {
        LeaveApplication::find($id)->delete();
        return redirect()->back();
    }
    public function store(Request $request){
        $this->validate(request(), [
            'start' => 'required',
            'end' => 'required',
            'remarks' => 'required',
        ], [
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
        return response()->json(['success'=>'Leave applied successfully','id'=>$leave->id]);
    }
    public function update(Request $request){
        $this->validate(request(), [
            'start' => 'required',
            'end' => 'required',
            'remarks' => 'required',
        ], [
            'start.required' => 'start field is required *',
            'end.required' => 'end field is required *',
            'remarks.required' => 'remarks is required *',
        ]);

        $leave= LeaveApplication::find($request->id);
        $leave->start=$request->start;
        $leave->end=$request->end;
        $leave->remarks=$request->remarks;
        $leave->save();
        return response()->json(['success'=>'Leave updated successfully','id'=>$leave->id]);
    }
}
