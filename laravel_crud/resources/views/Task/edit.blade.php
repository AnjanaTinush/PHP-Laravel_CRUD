@extends('layouts.frontend')

@section('content')
<br></br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   
                    <div class="card-header">
                        <h4>Update task for staff member
                            <a href="{{ url('task') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('task.update',['task' => $task])}}" method="post">                            
                        @csrf
                        @method('put')
                            <div class="mb-3">
                                <label>Task Name</label>
                                <input type="text" name="name" class="form-control" value="{{$task->name}}"/>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Final date</label>
                                <input type="date" name="finaldate" class="form-control" value="{{$task->finaldate}}"/>
                                @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control" >{{$task->description}}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Assign staff</label>
                                <input type="number" name="staff_id" class="form-control"  value="{{$task->staff_id}}"/>
                                @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                           
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection