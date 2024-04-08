<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Task; 

class TaskController extends Controller
{
    //
    public function switchPriority(Request $request, $id)
{
    $task = Task::findOrFail($id);
    if($task->priority==1){
        $task->priority = 0;

    }else{
    $task->priority = 1;

    }    
    $task->save();

    return response()->json(['success' => 'Priority updated successfully!']);
}

    public function start($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 1;
        $task->save();
        return redirect()->back()->with('success', 'Task status updated successfully!');
    }
    public function complete($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 2; 
        $task->save();
        return redirect()->back()->with('success', 'Task status updated successfully!');
    }
    
    
    public function delete($id){
        Task::find($id)->delete();
        return response()->json(['success'=> 'Task deleted successfully!']);
    }
    public function show($id){
        $show=Task::find($id);
        return view('admin.tasks.show',compact('show',));
    }
    public function edit($id){
        $users=User::all();
        $edit=Task::find($id);
        return view('admin.tasks.edit',compact('edit','users'));
    }
    public function index(Request $request)
    {
            if (auth()->user()->role == 'user'){
            $tasks=Task::where('id',auth()->user()->id);
           }
            else{
                $tasks=Task::query();
            }
            $search = $request['search'] ?? "";
            if ($search != ""){
            $tasks = $tasks
            ->where('id','LIKE',"%$search%")
            ->orwhere('user_id','LIKE',"%$search%")
            ->orwhere('title','LIKE',"%$search%");
            }
            $tasks=$tasks->paginate(10);
            $users=User::all();
            return view('admin.tasks.index', compact('tasks','search','users')); 
        }
    public function create(){

        $users=User::all();
        return view('admin.tasks.create',compact('users'));
    }
    public function store(Request $request){
        //dd($request->all());
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required', 
            'user_id' => 'required',  
        ],
            [
                'title.required' => 'Title is required *',
                'description.required' => ' Description is required *',
                'user_id.required' => ' User is required *',
            ]);

        $task=new Task();
        $task->user_id=$request->user_id;
        $task->status=0;
        $task->title=$request->title;
        $task->description=$request->description;
        $task->priority=0;
        $task->save();
        return response()->json(['success'=>'Task added successfully!','id'=>$task->id]);
}
    public function update(Request $request){
        //dd($request->all());
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required', 
            'user_id' => 'required',  
        ],
            [
                'title.required' => ' Title is required *',
                'description.required' => ' Description is required *',
                'user_id.required' => ' User is required *',
            ]);

        $task= Task::find($request->id);
        $task->user_id=$request->user_id;
        $task->status=0;
        $task->title=$request->title;
        $task->description=$request->description;
        $task->save();
        return response()->json(['success'=>'Task updaated successfully!','id'=>$task->id]);

        
    }
    public function subtask(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->subtask=$request->subtask;
        $task->save();
        return redirect()->back()->with('success', 'Subtask  updated successfully!');
    }

}


