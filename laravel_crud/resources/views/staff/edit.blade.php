@extends('layouts.frontend')

@section('content')
<br></br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   
                    <div class="card-header">
                        <h4>Add new staff member
                            <a href="{{ url('staff') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('staff.update',['staff' => $staff])}}"  method="POST">                            
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$staff->name}}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"  value="{{$staff->address}}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control"  value="{{$staff->position}}"/>
                                @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control"  value="{{$staff->phone}}" />
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                           
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update staaff</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection