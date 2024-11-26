<?php

namespace App\Http\Controllers;
use App\Models\Task; // Correct import
use Illuminate\Http\Request;
use App\Models\Staff_; // Import the Staff model

class TaskControler extends Controller
{
    public function index()
    {
        $tasks=task :: all();
        return view('task.index',['task'=>$tasks]);

    }


    public function create()
    {
        // Fetch all staff members
        $staffMembers = Staff_::all();

        // Pass staff members to the view
        return view('task.create', compact('staffMembers'));
    }

    public function store(Request $request)
    {
        // Validate and store the task data
        $data = $request->validate([
            'name' => 'required',
            'finaldate' => 'required',
            'description' => 'required',
            'staff_id' => 'required',
        ]);

        Task::create($data);

        return redirect(route('task.index'))->with('status','Task Created Successfully');;
    }

    public function edit(Task $task)
    {
        // Fetch all staff members
        $staffMembers = Staff_::all();
    
        // Pass both task and staff members to the view
        return view('task.edit', compact('task', 'staffMembers'));
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
