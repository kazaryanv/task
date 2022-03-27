<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view("Auth.admin");
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
        return redirect()->route('dashboard');
    }

    public function  logout() {
        Auth::logout();
        return redirect()->route('login-view');
    }


}
