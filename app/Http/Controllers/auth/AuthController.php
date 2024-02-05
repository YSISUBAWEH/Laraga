<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'passwordRepeat' => 'required|same:password',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('N.up2');
    }
    public function complete(Request $request)
    {
        $request->validate([
            'namaLengkap' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $user = User::create([
            'namaLengkap' => $request->namaLengkap,
            'alamat' => $request->alamat,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->guard('web')->attempt($credentials)) {
		    $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('g2Wr2P' , 'this session.');
		}

		if (auth()->guard('admin')->attempt($credentials)) {
		     $request->session()->regenerate();
            return redirect()->route('A.Fi')->with('success' , 'Telah Login');
		} else {
            return redirect()->route('N.in');
        }
    }

    public function logout(Request $request)
    {
    	if (Auth::guard('web')->check())
        {
            Auth::guard('web')->logout(); 
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        if (Auth::guard('admin')->check())
        {    
            Auth::guard('admin')->logout(); 
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    }
}
