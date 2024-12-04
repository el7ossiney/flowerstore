@extends('dashboard.layouts.app')
@section('header', 'Admin')
@section('breadcrump','Admin')
@section('content')

    <form action="{{ $data->id ? route('admins.update',$data->id) : route('admins.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($data->id)
            @method('PUT')
        @endif
        <!-- First Name -->
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="first_name" id="firstname" value="{{ old('firstname', $data->first_name) }}" class="form-control" required>
        </div>

        <!-- Last Name -->
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="lastname" value="{{old('lastname', $data->last_name)}}" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value= "{{old('email', $data->email)}}" class="form-control" required>
        </div>

        <!-- Password -->
        @if(!$data->id)
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <!-- Password Confirmation -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        @endif
        <div class="mb-3">
            <label for="image" class="form-label">Profile image</label>
            <input type="file" name="image" id="image" class="form-control" {{!$data->id ? 'required' : ''}}>
        </div>

        <!-- Status Selector -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="activation" id="status" class="form-select" required>
                <option value="1" @selected($data->activation == 1) >Active</option>
                <option value="0"@selected($data->activation == 0)>Non Active</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
