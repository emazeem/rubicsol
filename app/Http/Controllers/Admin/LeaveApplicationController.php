<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LeaveApplicationController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->role == 'user'){
            $leaves=LeaveApplication::where('id',auth()->user()->id);
        }
        else{
            $leaves=LeaveApplication::query();
        }
        $search = $request['search'] ?? "";
        if ($search != ""){
          $leaves = $leaves
          ->orwhere('start','LIKE',"%$search%")
          ->orwhere('end','LIKE',"%$search%")
          ->orwhere('status','LIKE',"%$search%")
          ->orwhere('reason','LIKE',"%$search%");
        }
        $leaves=$leaves->paginate(10);
        return view('admin.leaves.index',compact('leaves','search'));
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
        return response()->json(['success' => 'Leave application deleted successfully!']);
    }
    public function store(Request $request){
        $this->validate(request(), [
            'start' => 'required',
            'end' => 'required',
            'remarks' => 'required',
        ], [
            'start.required' => 'Start date is required *',
            'end.required' => ' End date is required *',
            'remarks.required' => ' Remarks is required *',
        ]);

        $leave=new LeaveApplication();
        $leave->user_id=auth()->user()->id;
        $leave->status=0;
        $leave->start=$request->start;
        $leave->end=$request->end;
        $leave->type=$request->type; //leave type
        $leave->nature=$request->nature; //leave type
        $leave->remarks=$request->remarks;
        $leave->save();
        return response()->json(['success'=>'Leave applied successfully!','id'=>$leave->id]);
    }
    public function update(Request $request){
        $this->validate(request(), [
            'start' => 'required',
            'end' => 'required',
            'remarks' => 'required',
        ], [
            'start.required' => 'Start date is required *',
            'end.required' => ' End date is required *',
            'remarks.required' => ' Remarks is required *',
        ]);

        $leave= LeaveApplication::find($request->id);
        $leave->start=$request->start;
        $leave->end=$request->end;
        $leave->remarks=$request->remarks;
        $leave->type=$request->type;
        $leave->nature=$request->nature;
        $leave->save();
        return response()->json(['success'=>'Leave updated successfully','id'=>$leave->id]);
    }
    public function approve($id)
    {
        $leave = LeaveApplication::findOrFail($id);
        $leave->status = 1;
        $leave->save();
        return response()->json(['success'=>'Leave status updated successfully!']);
    }
    public function reason(Request $request)
    {
        $leave = LeaveApplication::findOrFail($request->id);
        $leave->reason = $request->reason;
        $leave->save();
        return redirect()->back()->with('success', 'leave reason updated successfully.');
    }
    
    public function reject($id)
    {
        $leave = LeaveApplication::findOrFail($id);
        $leave->status = 2; 
        $leave->save();
        return response()->json(['success'=>'Leave status updated successfully!']);
    }
}
