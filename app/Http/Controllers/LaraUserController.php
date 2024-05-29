<?php

namespace App\Http\Controllers;

use App\Models\LaraUser;
use Illuminate\Http\Request;

class LaraUserController extends Controller
{
    public function index()
    {
        // Logic to show a list of users
    }

    public function create()
    {
        // Logic to show the form for creating a new user
    }

    public function store(Request $request)
    {
        // Validation logic
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        // Create new user
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);  // Hash the password
        LaraUser::create($data);

        // Redirect after creation
        return redirect()->route('registerroute')->with('success', 'User created successfully');
    }

    public function show(LaraUser $user)
    {
        // Logic to show a single user
    }

    public function edit(LaraUser $user)
    {
        // Logic to show the form for editing a user
    }

    public function update(Request $request, LaraUser $user)
    {
        // Validation logic
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|confirmed|min:8',
        ]);

        // Update user details
        $data = $request->all();
        if ($request->filled('password')) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);

        // Redirect after update
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(LaraUser $user)
    {
        // Logic to delete a user
        $user->delete();

        // Redirect after deletion
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
