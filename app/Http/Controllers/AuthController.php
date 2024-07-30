<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\M_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLoginForm(){
        return view('auth.login');
    }



    public function login(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'username' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9]+$/'],
                'password' => ['required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9]+$/'],
            ]);

            $credentials = $request->only('username', 'password');
            $admin = M_admin::where('username', $credentials['username'])->first();


            if ($admin && $credentials['username'] === $admin->username && Hash::check($credentials['password'], $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('auth.dashboard');
            } else {
                return back()->withErrors([
                    'msg' => 'Username atau password salah.',
                ]);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors());
        }
    }
}
