@extends('dashboard.layouts.app')
@section('header', 'Admin')
@section('breadcrump','Admin')

@section('content')
<div class="">
    <a class="btn btn-success"  href="{{route('admins.index',['activation'=>1])}}">Active</a>
    <a class="btn btn-warning" href="{{route('admins.index',['activation'=>0])}}">Not Active</a>
</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Activation</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $admin)
                <tr>
                    <th>{{ $admin->id }}</th>
                    <td>{{ $admin->first_name }}</td>
                    <td>{{ $admin->last_name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->activation == 1 ? 'Active' : 'Non Active' }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admins.edit',$admin->id)}}">Edit</a>
                        <form action="{{route('admins.destroy',$admin->id)}}" method="POST" style="display: inline">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse

        </tbody>
    </table>
@endsection
