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
                              <!-- Dropdown to select staff -->
                              <div class="mb-3">
    <label for="staff_id" class="form-label">Select Staff Member</label>
    <select name="staff_id" id="staff_id" class="form-select">
        <option value="">Select Staff ID</option>
        @foreach($staffMembers as $staff)
            <option value="{{ $staff->id }}" {{ $task->staff_id == $staff->id ? 'selected' : '' }}>
                {{ $staff->name }} (Staff ID: {{ $staff->id }})
            </option>
        @endforeach
    </select>
    @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
</div>

                           
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary col-1">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection