<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subtask;
use Illuminate\Http\Request;

class SubtaskController extends Controller
{
    public function store(Request $request){
        $this->validate(request(), [
            'subtask' => 'required',
        ], [
            'subtask.required' => 'description field is required *',
        ]);

        $subtask=new Subtask();
        $subtask->task_id=$request->id;
        $subtask->description=$request->subtask;
        $subtask->save();
        return redirect()->back();
    }
    public function complete($id)
    {
        $subtask = Subtask::findOrFail($id);
        $subtask->status = 1; 
        $subtask->save();
        return redirect()->back()->with('success', 'Subtask status updated successfully.');
    }
}
