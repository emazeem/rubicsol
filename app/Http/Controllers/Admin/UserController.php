<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    //
    public function changePassword(Request $request)
    {
        return view('users.change-password');
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        
        return view('admin.users.create');
    }
    public function store(Request $request){
        $this->validate(request(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'phone' => 'required',
            'role' => 'required',    
            'joining' => 'required',    
        ],
            [
                'name.required' => 'Name field is required *',
                'fname.required' => 'First Name field is required *',
                'email.required' => 'Email field is required *',
                'password.required' => 'Password field is required *',
                'phone.required' => 'Phone field is required *',
                'role.required' => 'Roles field is required *',
            ]);

        $user=new User();
        $user->role=$request->role;
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->joining=$request->joining;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->get('password'));
        

        $user->save();
        
        if (isset($request->profile)){
            Storage::delete('public/profile/'.$user->id.'/'.$user->profile);
            $attachment=time().'-'.$request->profile->getClientOriginalName();
            Storage::disk('local')->put('public/profile/'.$user->id.'/'.$attachment, File::get($request->profile));
            $user->profile=$attachment;
        }
        
        $user->save();
        return response()->json(['success'=>'User added successfully','id'=>$user->id]);
    }
    public function edit($id){
        $edit=User::find($id);
        return view('admin.users.edit',compact('edit'));
    }
    public function show($id){
        $show=User::find($id);
        return view('admin.users.show',compact('show'));
    }
    public function update(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            
            'phone' => 'required',
            'role' => 'required',    
        ],
            [
                'name.required' => 'Name field is required *',
                'fname.required' => 'First Name field is required *',
                'email.required' => 'Email field is required *',
                
                'phone.required' => 'Phone field is required *',
                'role.required' => 'Roles field is required *',
            ]);

        $user= User::find($request->id);
        $user->role=$request->role;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->get('password'));
        $user->save();
        
        if (isset($request->profile)){
            Storage::delete('public/profile/'.$user->id.'/'.$user->profile);
            $attachment=time().'-'.$request->profile->getClientOriginalName();
            Storage::disk('local')->put('public/profile/'.$user->id.'/'.$attachment, File::get($request->profile));
            $user->profile=$attachment;
        }
        
        $user->save();
        return response()->json(['success'=>'User edited successfully','id'=>$user->id]);
    }
}
