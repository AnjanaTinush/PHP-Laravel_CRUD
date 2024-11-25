<?php

namespace App\Http\Controllers;

use App\Models\staff_; // Correct import
use Illuminate\Http\Request;

class StaffControler extends Controller
{
    public function index()
    {
        return view('staff.index');
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'phone' => 'required|numeric',
        ]);

        // Use the correct model name
        $newstaff = staff_::create($data);

        return redirect(route('staff.index'));
    }

    public function show(staff_ $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(staff_ $staff)
    {
        return view('staff.edit', compact('staff'));
    }
}
