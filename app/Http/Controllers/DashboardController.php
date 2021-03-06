<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
//use App\Http\Requests;
use Hash;
use App\User;
use Auth;
Use DB;
use Carbon\Carbon;
use App\Staff;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['checkUsernameAvailability', 'checkEmailAvailability']]);
        $this->middleware('checkStaff', ['except' => ['logout']]);
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
        return redirect('/dashboard');
    }

    public function account(Request $request) {
        $isAdmin = Auth::User()->isAdmin;
        $isUser = $request->id == Auth::User()->id;
        $user = $isUser ? Auth::User() : DB::table('users')
            ->where('id', $request->id)
            ->first();

        return view('admin/account')->with(compact('isUser', 'user', 'isAdmin'));
    }

    public function checkUsernameAvailability(Request $request) {
        $user = User::where('name', $request->username)->get();

        return json_encode($user->count() == 0);
    }

    public function checkEmailAvailabiity(Request $request) {
        $user = User::where('email', $request->email)->get();

        return json_encode($user->count() == 0);
    }

    public function store(Request $request) {
        $request->merge([
            'birthDate' => new Carbon($request->birthDate),
            'isAdmin' => $request->isAdmin == 'true',
            'isStaff' => $request->isStaff == 'true']);
        $request->request->add(['password' => Hash::make($request->name . $request->birthDate->year)]);

        $user = User::create($request->all());

        if($user->isStaff) {
            $path = $request->profilePicture->storeAs('avatars',
                $user->lastName . $user->firstName . $user->id . '.' . $request->profilePicture->extension(),
                'public');
            $request->request->add(['id' => $user->id, 'imageLocation' => $path]);

            Staff::create($request->all());
        }

        dd($request);

        return redirect('/dashboard/account' . $user->id);
    }
}
