<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    // Menyimpan data user ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // Kirim data ke Node.js
        $response = Http::post('http://localhost:3000/add-user', [
            'name'  => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('index')->with('success', 'User added successfully.');
    }
}
