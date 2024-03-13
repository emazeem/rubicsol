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
    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.index', compact('tasks')); 
    }
    public function create(){
        $tasks=Task::all();
        return view('admin.tasks.create',compact('tasks'));
    }

}

