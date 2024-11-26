<?php

namespace App\Http\Controllers;
use App\Models\Task; // Correct import
use Illuminate\Http\Request;

class TaskControler extends Controller
{
    public function index()
    {
        $tasks=task :: all();
        return view('task.index',['task'=>$tasks]);

    }


    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'finaldate' => 'required',
            'description' => 'required',
            'staff_id' => 'required|numeric',
        ]);

        // Use the correct model name
        $newTask = task::create($data);

        return redirect(route('task.index'));

    }

    public function edit(task $task)
    {
        return view('task.edit',['task'=>$task]);
    }

    public function update(task $task ,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'finaldate' => 'required',
            'description' => 'required',
            'staff_id' => 'required|numeric',
        ]);
        
        $task -> update($data);

        return redirect(route('task.index'))->with('success','Task updated successfully');
    }

    public function destroy(task $task){
        $task -> delete();
        return redirect(route('task.index'))->with('success','Task deleted successfully');

    }
}
