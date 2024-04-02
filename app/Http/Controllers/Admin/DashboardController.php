<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\LeaveApplication;
use App\Models\User;
use App\Models\Task;
use Storage;
use File;
use Auth;
use Hash;


class DashboardController extends Controller
{
    //
    
    
    public function ChangePassword()
    {
        return view('admin.change_password');
    }
    public function profile()
    {
        return view('admin.profile');
    }



    public function updatePassword(Request $request)
{
    $request->validate([
        'currentPassword' => 'required',
        'newPassword' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->currentPassword, $user->password)) {
        return redirect()->back()->with('error', 'The current password is incorrect.');
    }

    $user->password = Hash::make($request->newPassword);
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully.');
}



    public function changeProfile(Request $request)
    {
        $this->validate(request(), [
            'profile' => 'required',
        ],
            [
                'profile.required' => 'Profile field is required *',
            ]);

        $user=User::find(auth()->user()->id);
        $attachment=time().'-'.$request->profile->getClientOriginalName();
        Storage::disk('local')->put('public/profile/'.$attachment, File::get($request->profile));
        $user->profile=$attachment;
        $user->save();
        return redirect()->back();
    }
    public function updateCV(Request $request)
    {


        $this->validate(request(), [
            'file' => 'required',
        ],
            [
                'file.required' => 'Cv  is required *',
            ]);

        $user=User::find($request->id);
        $attachment=time().'-'.$request->file->getClientOriginalName();
        Storage::disk('local')->put('public/cv/'.$attachment, File::get($request->file));
        $user->cv=$attachment;
        $user->save();
        return redirect()->back();
    }
    public function updateCNIC(Request $request)
    {

        dd($request->all());
        $this->validate(request(), [
            'file' => 'required',
        ],
            [
                'file.required' => 'Cnic  is required *',
            ]);

        $user=User::find($request->id);
        $attachment=time().'-'.$request->file->getClientOriginalName();
        Storage::disk('local')->put('public/cnic/'.$attachment, File::get($request->file));
        $user->cnic=$attachment;
        $user->save();
        return redirect()->back();
    }
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
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        $leaves = LeaveApplication::where('user_id', auth()->user()->id)->get();
        return view('admin.dashboard',compact("attendanceExist",'ifUserCheckout','attendances','tasks','leaves'));
    }
}
