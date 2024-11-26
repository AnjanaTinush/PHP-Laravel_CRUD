@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                
                <div class="alert alert-success">
                   
                </div>
                

                <div class="card">
                    <div class="card-header">
                        <h4>All task for staff members
                            <a href="{{ url('task/create') }}" class="btn btn-primary float-end">Add task for Staff member</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Task Name</th>
                                    <th>Final date</th>
                                    <th>Description</th>
                                    <th>Staff Id</th>
                                    <th class="d-flex justify-content-center align-items-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($task as $task)
                            <tr>
                            <td>{{$task->id }}</td>
                            <td>{{$task->name }}</td>
                            <td>{{$task->finaldate }}</td>
                            <td>{{$task->description }}</td>
                            <td>{{$task->staff_id }}</td>
                            <td class="d-flex justify-content-center align-items-center">
                            <a href="{{ route('task.edit',['task' => $task]) }}" class="btn btn-success me-4">Edit</a>
                            <form action="{{route('task.destroy',['task'=> $task])}}" method="POST" class="d-inline">
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