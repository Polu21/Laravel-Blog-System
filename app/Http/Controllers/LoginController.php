<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('pages/login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            $data = Auth::user();
            // dd($data);
            return redirect('/admin/dashboard')->with(compact('data'));
        }
        return back()->with('error', 'Email or Password salah');
    }
}
