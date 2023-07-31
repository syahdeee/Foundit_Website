<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.loginAdmin');
    }

    public function auth(Request $request){
        $emailExists = User::where('email', '=', $request->email)->get();
        
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=> 'required'

        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
           
            if ($emailExists[0]->is_admin){
                return redirect()->intended('/admin/home');
            }
        }
        return back()->with('loginError', 'Email/Password salah!');   
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('logoutSuccess', 'Berhasil logout');
    }
}
