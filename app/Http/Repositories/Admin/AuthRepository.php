<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthRepository implements AuthInterface
{

    public function loginPage()
    {
        return view('Admin.auth.login');
    }

    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            toast('Login Successfully', 'success');
            return redirect(route('admin.index'));
        }
        return back();
    }

    public function logout($request)
    {
        Session::flush();
        Auth::logout();
        return redirect(route('auth.login-page'));
    }
}
