<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = new Category();
        
        return view('dashboard.products.index' , compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','title')->get();
        $product  = new Product();
        return view('dashboard.products.create_and_edit',compact('product','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->merge([
            'slug' => Str::slug($request->title)
        ]);
        $data  = $request->except('image');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('products',[
                'disk'=>'public'
            ]);
            $data['image'] = $path;
        }
        
        Product::create($data);
        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::select('id','title')->get();
        return view('dashboard.products.create_and_edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->except('image');
        if($request->hasFile('image')){
            $image = $request->file('image')->store('products',[
                'disk' => 'public'
            ]);
            $data['image'] = $image ;
            if($product->image){
            Storage::disk('public')->delete($product->image);
            }
        }
        $product->update($data);
        return to_route('products.index')->with('success','Product Updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')->with('success','Product Deleted!');
    }
}
