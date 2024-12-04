<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = new Brand();
        return view('dashboard.brands.create_and_edit',compact('brand') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        Brand::create($request->all());
        return to_route('brands.index')->with('success','Brand created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('dashboard.brands.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.create_and_edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->all());
        return to_route('brands.index')->with('success','Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route('brands.index')->with('success','Brand deleted successfully');
    }
}
