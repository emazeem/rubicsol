<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Storage;

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
    public function index(Request $request){

        if (auth()->user()->role == 'user'){
            $users=User::where('id',auth()->user()->id);
        }
        else{
            $users=User::query();
        }
        $search = $request['search'] ?? "";
        if ($search != ""){
          $users = $users
          ->where('id','LIKE',"%$search%")
          ->orwhere('fname','LIKE',"%$search%")
          ->orwhere('lname','LIKE',"%$search%")
          ->orwhere('email','LIKE',"%$search%")
          ->orwhere('phone','LIKE',"%$search%")
          ->orwhere('role','LIKE',"%$search%");
        }
        $users=$users->paginate(10);    
        return view('admin.users.index',compact('users','search'));
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
            'designation' => 'required',
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
        $user->designation=$request->designation;
        $user->address=$request->address;
        $user->cnic_no=$request->cnic_no;
        $user->bank=$request->bank;
        $user->account=$request->account;
        $user->department=$request->department;
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
        if (auth()->user()->role == 'user' and auth()->user()->id == $id){
            $edit=User::find($id);
        }elseif(auth()->user()->role=='super-admin'){
            $edit=User::find($id);
        }else{
            exit(404);
        }
        return view('admin.users.edit',compact('edit'));
    }
    public function show($id){
        if (auth()->user()->role == 'user' and auth()->user()->id == $id){
            $show=User::find($id);
        }elseif(auth()->user()->role=='super-admin'){
            $show=User::find($id);
        }else{
            exit(404);
        }
        return view('admin.users.show',compact('show'));
    }
    public function update(Request $request){
        $this->validate(request(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',

            'phone' => 'required',
            'role' => 'required',
            'joining' => 'required',
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
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->joining=$request->joining;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->cnic_no=$request->cnic_no;
        $user->bank=$request->bank;
        $user->account=$request->account;
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
