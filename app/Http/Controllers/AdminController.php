<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use Hash;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function home() {
        $users = User::all();
        return view('admin/home')->with('users', $users);
    }

    public function newUser() {
        return view('admin/new_user');
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin');
    }

    public function store(Request $request) {
        $request->merge(['password' => Hash::make($request->password)]);

        $user = User::create($request->all());

        return redirect('/admin');
    }
}
