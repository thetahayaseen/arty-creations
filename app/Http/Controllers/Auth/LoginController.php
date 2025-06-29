<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view("auth.login");
    }

    public function login(LoginRequest $request)    {
        if(auth()->attempt($request->validated())){
            return redirect()->intended("/"); 
        }

        return back()->withErrors(
            ["password" => "The provided credentials are incorrect."]
        )->withInput();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/auth/login");
    }
}
