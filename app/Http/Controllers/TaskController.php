<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $tasks = Task::where('userId', $userId)->get();
    
        return view('home', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('showTask', ["task" => $task]);
    }

    public function create()
    {
        return view('home');
    }
}
