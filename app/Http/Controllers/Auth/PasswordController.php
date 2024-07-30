<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function edit(){
        return view('auth.passwordEdit');
    }
    /**
     * Update the user's password.
     */ public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'confirmed', Password::defaults()],
        ]);

        if (Hash::check($validated['current_password'], $request->user()->password)) {
            $request->user()->update([
                'password' => Hash::make($validated['new_password']),
            ]);

            return redirect()->route('dashboard')->with('status', __('Password updated.'));
        } else {
            return back()->withErrors([
                'current_password' => __('The provided password does not match your current password.'),
            ]);
        }
    }
}
