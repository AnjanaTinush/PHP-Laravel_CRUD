<?php

namespace App\Http\Controllers;

use App\Models\staff_; // Correct import
use Illuminate\Http\Request;

class StaffControler extends Controller
{
    public function index()
    {
        $staff=staff_ :: all ();
        return view('staff.index',['staffs'=>$staff]);

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

        return redirect(route('staff.index'))->with('status','Staff added Successfully');;
    }

    public function show(staff_ $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(staff_ $staff)
    {
        return view('staff.edit',['staff'=>$staff]);
    }

    public function update(staff_ $staff ,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'phone' => 'required',
        ]);    
        
        $staff -> update($data);

        return redirect(route('staff.index'))->with('success','Staff updated successfully');
    }

    public function destroy(staff_ $staff){
        $staff -> delete();
        return redirect(route('staff.index'))->with('success','Staff deleted successfully');

    }
}
