@extends('dashboard.layouts.app')
@section('header', 'Create new product')
@section('breadcrump', 'Products')

@section('content')

    <form method="POST" action="{{ $product->id ? route('products.update', $product->id) : route('products.store') }}"
        class="mt-5" enctype="multipart/form-data">
        @csrf
        @if ($product->id)
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{ old('title', $product->title) }}" name="title">

        </div>
        <div class="form-group">
            <label for="desciption">Description</label>
            <input type="text" class="form-control" id="description"
                value="{{ old('description', $product->description) }}" name="description">
        </div>
        <div class="form-group">
            <label for="active">Active</label>
            <select class="form-control" name="active" id="active">
                <option value="1" selected>Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" name="size" id="size"
                value="{{ old('size', $product->size) }}">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color"
                value="{{ old('color', $product->color) }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price"
                value="{{ old('price', $product->price) }}">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="new">New</option>
                <option value="shop">Shop</option>
                <option value="wedding">Wedding</option>
                <option value="holiday">Holiday</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="filter-status" class="form-label">Select Category</label>
            <select id="filter-status" name="category_id" class="form-select">
                <option value="" selected></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($category->id == $product->product_id)>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>





        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
