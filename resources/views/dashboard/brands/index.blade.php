@extends('dashboard.layouts.app')
@section('header', 'Brands')
@section('breadcrump', 'Brands')


@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($brands as $brand)
                <tr>
                    <td>{{$brand->title}}</td>
                    <td>{{$brand->description}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('brands.edit',$brand->id)}}">Edit</a>
                      <form action="{{route('brands.destroy',$brand->id)}}" method="post" style="display: inline">
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
            @empty
                <td>No Brands Defined</td>
            @endforelse

        </tbody>
    </table>
@endsection
