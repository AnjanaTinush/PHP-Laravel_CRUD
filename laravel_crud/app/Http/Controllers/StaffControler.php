<?php

namespace App\Http\Controllers;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffControler extends Controller
{
    public function index(){
        return view('staff.index');
    }

    public function create(){
        return view('staff.create');
    }

    public function show(staff $staff){
        return view('staff.show');
    }

    public function edit(staff $staff){
        return view('staff.edit');
    }
}
