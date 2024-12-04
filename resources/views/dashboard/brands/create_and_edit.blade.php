@extends('dashboard.layouts.app')
@section('header','Create new brand')
@section('breadcrump','Brands')

@section('content')

<form method="POST"  action="{{$brand->id ? route('brands.update',$brand->id) : route('brands.store') }}" class="mt-5">
  @csrf
  @if($brand->id)
  @method('PUT')
  @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" value="{{old('title',$brand->title)}}" name="title" >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{old('description',$brand->description)}}" name="description">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection