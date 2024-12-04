@extends('dashboard.layouts.app')
@section('header', 'Categories')
@section('breadcrump', 'Categories')


@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Brand</th>
                <th scope="col">Position</th>
                <th scope="col">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->brands->title}}</td>
                    <td>{{$category->active == '1' ?'Active' : 'Not Active'}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('categories.edit',$category->id)}}">Edit</a>
                      <form action="{{route('categories.destroy',$category->id)}}" method="post" style="display: inline">
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
            @empty
                <td>No Categories Defined</td>
            @endforelse

        </tbody>
    </table>
@endsection
