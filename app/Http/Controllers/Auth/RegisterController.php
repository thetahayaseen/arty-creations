<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Models\User;
use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view("auth.register");
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect("/");
    }
}
