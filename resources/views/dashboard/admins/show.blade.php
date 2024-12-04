@extends('dashboard.layouts.app')
@section('header', 'Admin')
@section('breadcrump',"$admin->firstname")

@section('content')


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

                <tr>
                    <th>{{ $admin->id }}</th>
                    <td>{{ $admin->first_name }}</td>
                    <td>{{ $admin->last_name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->activation == 1 ? 'Active' : 'Non Active' }}</td>
                </tr>


        </tbody>
    </table>
@endsection
