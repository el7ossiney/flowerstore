@extends('dashboard.layouts.app')
@section('header','Create new category')
@section('breadcrump','Categories')

@section('content')

<form method="POST"  action="{{$category->id ? route('categories.update',$category->id) : route('categories.store') }}" class="mt-5">
  @csrf
  @if($category->id)
  @method('PUT')
  @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" value="{{old('title',$category->title)}}" name="title" >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('description',$category->description)}}" name="description">
  </div>
  <div class="form-group">
    <label for="active">Active</label>
    <select class="form-control" name="active" id="active">
        <option value="1" selected>Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
  <div class="mb-3">
    <label for="filter-status" class="form-label">Select Brand</label>
    <select id="filter-status" name="brand_id" class="form-select">
        <option value="" selected></option>
        @foreach($brands as $brand)
        <option value="{{$brand->id}}" @selected($brand->id == $category->brand_id)>{{$brand->title}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
  <label for="filter-status" class="form-label">Select Sub-Category</label>
  <select id="filter-status" name="subcategory_id" class="form-select">
      <option value="" selected></option>
      @foreach($subcategories as $subcategory)
      <option value="{{$subcategory->id}}" @selected($subcategory->id == $category->subcategory_id)>{{$subcategory->title}}</option>
      @endforeach
  </select>
</div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection