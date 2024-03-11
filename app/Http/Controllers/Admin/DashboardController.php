<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use Storage;
use File;

class DashboardController extends Controller
{
    //
    
    public function ChangePassword()
    {
        return view('admin.change-password');
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

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->password = Hash::make($request->new_password);
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
