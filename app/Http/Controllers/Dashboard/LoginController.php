<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\LoginRequest;

class LoginController extends Controller
{

    public function login() {
        return view('dashboard.auth.login')->with(['title' => 'تسجيل الدخول']);
    }


    public function postLogin(LoginRequest $request) {

        $rememberMe = $request->has('remember_me') ? true : false;

        if(auth('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$rememberMe)) {

                return redirect()->route('home');

        }else {

            return redirect()->back()->with(['error' => 'هناك خطأ ما يرجى اعاده المحاوله']);
        }
    }



    public function logout() {

        auth()->guard()->logout();

        return redirect()->route('admin.login');

    }
}
