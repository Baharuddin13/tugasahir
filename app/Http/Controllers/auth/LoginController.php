<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function tampilform()
    {
        return view('auth.loginform');
    }


    public function login(Request $request)
    {
        // Validate the login request
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,kasir',

        ]);

        //cek data di database
        $user = User::where('password', $request->password)->where('username', $request->username)->where('role', $request->role)->first();
        if (empty($user)) {
            return back()->withErrors('Password & Username & role salah');
        }

        // dd($role);


        //proses login
        if ($request->username == $user->username && $request->password == $user->password && $request->role == $user->role) {
            if ($user->role == 'admin') {
                session(["username" => $user->username, "role" => "admin"]);
            } else {
                session(["username" => $user->username, "role" => "kasir"]);
            }
            return redirect()->intended('/admin');
        }
    }

    // bersihkan session logout
    public function logout(Request $request){
        session()->flush();

        return redirect()->route('login.form');
    }

}
