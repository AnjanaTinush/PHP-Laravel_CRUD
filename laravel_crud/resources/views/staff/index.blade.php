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
                                    <th class="d-flex justify-content-center align-items-center">Action</th>
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
                            <td class="d-flex justify-content-center align-items-center">
    <a href="{{ route('staff.edit',['staff' => $staff]) }}" class="btn btn-success me-4">Edit</a>
    <form action="{{route('staff.destroy',['staff'=> $staff])}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>

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