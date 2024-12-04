<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $activation = $request->query('activation', 1);

        $admins = Admin::where('activation', '=', "$activation")->get();
        return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = new Admin();
        return view('dashboard.admins.create_and_edit', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $data = $request->except('password_confirmation', 'image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path  = $image->store('uploaded', [
                'disk' => 'public'
            ]);
            $data['image'] = $path;
        }
        Admin::create($data);
        return to_route('admins.index')->with('success', 'Admin stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('dashboard.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Admin::findOrFail($id);
        return view('dashboard.admins.create_and_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, string $id)
    {
        $admin = Admin::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path  = $image->store('uploaded', [
                'disk' => 'public'
            ]);
            $data['image'] = $path;
            Storage::disk('public')->delete($admin->image);
        }
        $admin->update($data);
        return to_route('admins.index')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return to_route('admins.index');
    }
}
