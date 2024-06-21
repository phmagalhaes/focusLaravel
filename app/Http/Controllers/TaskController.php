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
        return view('newTask');
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->userId = Auth::id();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->deliveryDate = $request->date . " " . $request->time;
        $task->concluded = 0;

        $task->save();

        return redirect('/home')->with('msg', 'tarefa criada com sucesso');
    }

    public function destroy($id)
    {
        $task = new Task;
        $deleteTask = $task->where('id', $id);
        $deleteTask->delete();
        
        return redirect('/home')->with('msg', 'tarefa deletada com sucesso');
    }

    public function concluded($id)
    {
        $task = Task::findOrFail($id);
        $task->concluded = 1;

        $task->save();
        
        return redirect('/home')->with('msg', 'tarefa concluida com sucesso');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('editTask', ["task" => $task]);
    }
    public function update(Request $request, $id)
    {
        Task::findOrFail($id)->update($request->all());
        return redirect('/home')->with('msg', 'tarefa editada com sucesso');
    }
}
