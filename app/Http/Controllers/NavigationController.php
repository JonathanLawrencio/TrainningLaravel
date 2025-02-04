<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NavigationController extends Controller
{
    public function index(){
       $response = Http::get('http://localhost:3000/users');
       $users = $response->json();
        return view('index', compact('users'));
    }

    public function add(){
        return view('add');
    }
}
