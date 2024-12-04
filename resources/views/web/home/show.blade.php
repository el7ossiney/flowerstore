@extends('web.layouts.app')
@section('title','2')

@section('content')

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                </div>
                <div class="col-md-6">
                    <img src="img/340x420.png" class="img-responsive center-block" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <h1>{{$product->title}}</h1>
                    <p>
                        {{$product->description}}
                    </p>
                    <div>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span>10 Rating(s) | Add Your Rating</span>
                    </div>
                    <div>
                        <strong>${{$product->price}}</strong>
                    </div>
                    <div>
                        <label>Size</label>
                        <select class="form-control">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div>
                        <label>Color</label>
                        <div>
                            <a href="#"><span class="badge" style="background-color: #f00;">&nbsp;&nbsp;</span></a>
                            <a href="#"><span class="badge" style="background-color: #0f0;">&nbsp;&nbsp;</span></a>
                            <a href="#"><span class="badge" style="background-color: #00f;">&nbsp;&nbsp;</span></a>
                        </div>
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input type="number" class="form-control" value="1" min="1" max="1000">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Add to Cart</button>
                        <button class="btn btn-default"><span class="glyphicon glyphicon-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
