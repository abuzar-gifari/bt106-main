<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
// use mysql_xdevapi\Exception;

class LoginController extends Controller
{
    public function login()
    {
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $creds = $request->except('_token');
            if (\auth()->attempt($creds)) {
                if (auth()->user()->role == 'admin') {
                    return redirect()->route('admin.dashboard');
                }
                Session::flash('message', 'Login Successful!');
                Session::flash('alert', 'success');
                return redirect()->route('home');
            }
            Session::flash('message', 'Invalid Credentials!');
            Session::flash('alert', 'warning');

            return redirect()->back();
        } catch (\Exception $exception) {
            $error = $exception->validator->getMessageBag();
            return redirect()->back()->withErrors($error);
        }
    }

    public function logout()
    {
        try {
            //dd(auth()->user());
            auth()->logout();
            return redirect()->route('login');
        } catch (\Exception $exception) {
            return redirect()->back();
        }
    }

    public function profile()
    {
        return view('backend.users.profile');
    }
}
