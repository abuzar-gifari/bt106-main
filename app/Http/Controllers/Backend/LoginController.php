<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        try {
            $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            $creds=$request->except('_token');

            //dd($creds);
            //dd(Auth::attempt($creds)); returns true or false

            if(Auth::attempt($creds)){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->back();
            }

        }catch (\Exception $exception){
            $errors = $exception->validator->getMessageBag();
            return redirect()->back()->withErrors($errors);
        }
    }

    public function logout()
    {
        try {
            //dd(auth()->user());
            auth()->logout();
            return redirect()->route('login');
        }catch (\Exception $exception){
            return redirect()->back();
        }
    }
}
