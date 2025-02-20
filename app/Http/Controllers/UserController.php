<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan halaman User Management
    public function index()
    {
        $users = User::all();
        return view('user_management', compact('users'));
    }

    // Menampilkan halaman tambah user
    public function create()
    {
        return view('add_user');
    }

    // Menerima data dari form dan menyimpannya ke database
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // Simpan user ke database
        User::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'status' => 'Accepted',
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }
}
