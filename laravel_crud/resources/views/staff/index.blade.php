@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                
                <div class="alert alert-success">
                   
                </div>
                

                <div class="card">
                    <div class="card-header">
                        <h4>All staff members
                            <a href="{{ url('staff/create') }}" class="btn btn-primary float-end">Add Staff member</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($staffs as $staff)
                            <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->name }}</td>
                            <td>{{ $staff->address }}</td>
                            <td>{{ $staff->position }}</td>
                            <td>{{ $staff->phone }}</td>
                         </tr>
                         @endforeach
                            </tbody>
                        </table>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection