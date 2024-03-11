<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Models\Attendance;


class DashboardController extends Controller
{
    //
    
  
    public function index()
    {
        $attendances=Attendance::where('user_id', auth()->user()->id)->get();
        $attendanceExist = Attendance::where('user_id', auth()->user()->id)
                                ->whereDate('check_in_date', date("Y-m-d"))
                                ->first();
        $ifUserCheckout = Attendance::where('user_id', auth()->user()->id)
                                ->whereDate('check_in_date', date("Y-m-d"))
                                ->where('status', 1)
                                ->first();
        return view('admin.dashboard',compact("attendanceExist",'ifUserCheckout','attendances'));
    }


}
