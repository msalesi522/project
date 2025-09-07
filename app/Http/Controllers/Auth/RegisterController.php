<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        user::create([
            ...$request->validated(),
            'password'=>$request->validated('password'),
        ]);
        return redirect()->route('login');
    }
}
