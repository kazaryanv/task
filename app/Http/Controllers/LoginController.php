<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view("Auth.login");
    }

    public function login(Request $request) {
        $user_data = $request->only(['email', 'password']);
        if(Auth::attempt($user_data)) {
            return redirect()->route('dashboard');
        } else {
            return back();
        }
    }
    public function create_user(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function  logout() {
        Auth::logout();
        return redirect()->route('login-view');
    }
}
