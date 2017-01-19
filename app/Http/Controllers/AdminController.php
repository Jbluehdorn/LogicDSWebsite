<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
//use App\Http\Requests;
use Hash;
use App\User;
use Auth;
Use DB;

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

    public function account(Request $request) {
        $isAdmin = Auth::User()->isAdmin;
        $isUser = $request->id == Auth::User()->id;
        $user = $isUser ? Auth::User() : DB::table('users')
            ->where('id', $request->id)
            ->first();

        return view('admin/account')->with(compact('isUser', 'user', 'isAdmin'));
    }

    public function store(Request $request) {
        $request->merge(['password' => Hash::make($request->password)]);

        $user = User::create($request->all());

        return redirect('/admin');
    }
}
