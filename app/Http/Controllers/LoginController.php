<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if($user = Auth::user()) {
            if($user->level == '1') {
                return redirect()->intended('../../../../admin');
            }else if ($user->level == '2') {
                return redirect()->intended('../../../../admin');
            }
        }

        return view('login.view_login');
    }

    public function proses(Request $request) {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ]
        );

        $kredensial = $request->only('username', 'email', 'password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == '1') {
                return redirect()->intended('../../../../admin');
            }else if ($user->level == '2') {
                return redirect()->intended('../../../../admin');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Maaf, data yang anda input salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
