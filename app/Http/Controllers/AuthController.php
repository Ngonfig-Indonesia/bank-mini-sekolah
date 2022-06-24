<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if($user = Auth::user()){
            if ($user->role == 'admin') {
                return redirect()->intended('admin/home');
            }elseif ($user->role == 'teller') {
                return redirect()->intended('admin/home');
            }elseif($user->role == 'author'){
                return redirect()->intended('admin/home');
            }
        }
        // return redirect()->route('dashboard');
    return view('/admin/index');
    }

    public function login(Request $request)
    {
        $rules = [
            'email'      => 'required',
            'password'      => 'required'
        ];
        $messages = [
            'email.required'     => 'Email wajib diisi',
            'password.required'     => 'Password wajib diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $remember = $request->has('remember') ? true : false;

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
        Auth::attempt($data, $remember);

        if (Auth::check()) {
            return redirect()->route('home');
        } else { 
            return redirect()->route('login')->withInput()->withErrors(['error' => 'Username atau Password tidak ditemukan!']);
        }
    
    }
    public function logout()
    {
    // $request->session()->flush();
    Auth::logout(); // menghapus session yang aktif
    return redirect()->route('login');
    }

}
