<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('user.index')->with('msg', 'Category has been successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::findOrFail($id);

        return view('admin.user.edit', compact('id', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id)->update($request->only(['name', 'email', 'address', 'phone']));

        return redirect()->route('user.index')->with('msg', 'Category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('user.index')->with('msg', 'Category has been successfully deleted');
    }
}
