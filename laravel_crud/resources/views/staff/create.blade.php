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
                    <form action="{{ route('staff.store') }}" method="POST">                            
                        @csrf
                        @method('post')
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control" />
                                @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" maxlength="10" pattern="\d{10}" title="Phone number must be 10 digits" />
    @error('phone') 
        <span class="text-danger">{{ $message }}</span> 
    @enderror
</div>

                           
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection