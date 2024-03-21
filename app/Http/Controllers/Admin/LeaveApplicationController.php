<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    public function index()
    {
        $leaves = LeaveApplication::all();
        return view('admin.leaves.index', compact('leaves'));
    }

    public function create()
    {
        return view('admin.leaves.create');
    }

}
