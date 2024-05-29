<?php

namespace App\Http\Controllers;
use App\Models\LaraUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
       public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        $user = LaraUser::where('email', $credentials['email'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            session(['username' => $user->name]);
            Log::info('User authenticated successfully with email: ' . $credentials['email']);
            $request->session()->regenerate();
            Log::info('Session regenerated. Redirecting to welcome route.');
            return redirect()->intended('welcome');
        } 
    
        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');
}
}