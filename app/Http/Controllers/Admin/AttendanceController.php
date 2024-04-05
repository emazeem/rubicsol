<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
{
    //
     public function delete($id){
        Attendance::find($id)->delete(); 
        return redirect()->back();
    }
    public function show($id){
        $show=Attendance::find($id);
        if 
        (auth()->user()->role == 'user' and auth()->user()->id == $show->user_id)
        {
            $show=Attendance::find($id);
        }
        elseif(auth()->user()->role=='super-admin'){
            $show=Attendance::find($id);
        }
        else
        {
            exit(404);
        }
        return view('admin.attendance.show',compact('show'));
    }
    public function edit($id){
        if (auth()->user()->role == 'user' and auth()->user()->id == $id){
            $edit=User::find($id);
        }elseif(auth()->user()->role=='super-admin'){
            $edit=User::find($id);
        }else{
            exit(404);
        }
        $edit=Attendance::find($id);
        $users=User::all();

        return view('admin.attendance.edit',compact('edit',"users"));
    }
    public function create(){
        $users=User::all();
        return view('admin.attendance.create',compact('users'));
    }

    public function index(){
        if (auth()->user()->role == 'user'){
            $attendances=Attendance::where('user_id',auth()->user()->id);
        }elseif(auth()->user()->role=='super-admin'){
            $attendances=Attendance::query();
        }else{
            exit(404);
        }
        $search = $request['search'] ?? "";
        if ($search != ""){
            //where
          $attendances = $attendances
          ->where('user_id','LIKE',"%$search%")
          ->orwhere('fname','LIKE',"%$search%") 
          ->orwhere('user','LIKE',"%$search%")
          ->orwhere('check_in','LIKE',"%$search%")
          ->orwhere('check_in_date','LIKE',"%$search%")
          ->orwhere('check_out_date','LIKE',"%$search%")
          ->orwhere('check_out','LIKE',"%$search%");
        }
        $attendances=$attendances->paginate(5); 
        return view('admin.attendance.index',compact('attendances','search'));
    }
    public function checkIn(){
        $attendance=new Attendance();
        $attendance->user_id=auth()->user()->id;
        $attendance->check_in_date=date("Y-m-d");
        $attendance->check_out_date=date("Y-m-d");
        $attendance->check_in=date("h:i:s");
        $attendance->check_out=date("h:i:s");
        $attendance->day=date('l');
        $attendance->worked_hours=0;
        $attendance->status=0;
       // $attendance->leave_id=;
        $attendance->remarks='marked by user';
        $attendance->save();
        return redirect()->back();

    }
    public function checkOut(){
        $attendance = Attendance::where('user_id', auth()->user()->id)
        ->whereDate('check_in_date', date("Y-m-d"))
        ->first();
        $attendance->check_out_date=date("Y-m-d");
        $attendance->check_out=date("h:i:s");
        $attendance->status=1;
        $attendance->save();
        return redirect()->back();

    }
    public function store(Request $request){
        $this->validate(request(), [
            'start_time' => 'required',
            'end_time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ],
            [
                'start_time.required' => 'start_time field is required *',
                'end_time.required' => 'end_time field is required *',
                'start_date.required' => 'start_date field is required *',
                'end_date.required' => 'end_date is required *',
                'user_id.required' => 'user_id field is required *',
                'status.required' => 'status field is required *',
            ]);

        $attendance=new Attendance();
        $attendance->user_id=$request->user_id;
        $attendance->check_in_date=$request->start_date;
        $attendance->check_out_date=$request->end_date;
        $attendance->check_in=$request->start_time;
        $attendance->check_out=$request->end_time;
        $attendance->day=date('l');
        $attendance->worked_hours=0;
        $attendance->status=$request->status;
       // $attendance->leave_id=;
        $attendance->remarks='marked by user';
        $attendance->save();
        return response()->json(['success'=>'Attendance added successfully']);


    }
    public function update(Request $request){
        $this->validate(request(), [
            'start_time' => 'required',
            'end_time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ],
            [
                'start_time.required' => 'start_time field is required *',
                'end_time.required' => 'end_time field is required *',
                'start_date.required' => 'start_date field is required *',
                'end_date.required' => 'end_date is required *',
                'user_id.required' => 'user_id field is required *',
                'status.required' => 'status field is required *',
            ]);

        $attendance= Attendance::find($request->id);
        $attendance->user_id=$request->user_id;
        $attendance->check_in_date=$request->start_date;
        $attendance->check_out_date=$request->end_date;
        $attendance->check_in=$request->start_time;
        $attendance->check_out=$request->end_time;
        $attendance->day=date('l');
        $attendance->worked_hours=0;
        $attendance->status=$request->status;
       // $attendance->leave_id=;
        $attendance->remarks='marked by user';
        $attendance->save();
        return response()->json(['success'=>'attendance updated successfully']);


    }
}
