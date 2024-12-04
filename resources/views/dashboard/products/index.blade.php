@extends('dashboard.layouts.app')
@section('header', 'products')
@section('breadcrump', 'products')


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
            @forelse ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->active == '1' ?'Active' : 'Not Active'}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>
                      <form action="{{route('products.destroy',$product->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
            @empty
                <td>No products Defined</td>
            @endforelse

        </tbody>
    </table>
@endsection
