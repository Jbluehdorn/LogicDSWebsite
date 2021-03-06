<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('checkStaff');
        $this->middleware('checkAdmin');
    }

    public function Users() {
        return User::paginate(5);
    }
}
