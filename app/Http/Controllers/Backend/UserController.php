<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('backend.users.index',compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'=>'required|min:5|max:255|string|regex:/^[a-zA-Z ]+$/',
                'phone'=>'required',
                'address'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required|confirmed'
            ],$messages = [
                'name.required' => 'The name is required.',
                'phone.required' => 'The phone no is required.',
                'address.required' => 'The address is required.',
                'email.required' => 'The email is required.',
                'password.required' => 'The password is required.',
            ]);

            $inputs=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                'address'=>$request->input('address'),
                'phone'=>$request->input('phone'),
                'role'=>'admin',
            ];
//            dd($inputs);
            User::create($inputs);
            return redirect()->route('admin.user');

        }catch (\Exception $exception){
            $errors = $exception->validator->getMessageBag();
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }
}
