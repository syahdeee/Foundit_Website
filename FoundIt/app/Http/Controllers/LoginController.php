<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $emailExist = User::where('email',$request->email)->exists();

        //Belum registrasi
        if (!$emailExist){
            return redirect('/login')->with('noRegist', 'Akun anda belum terdaftar. Silahkan registrasi terlebih dahulu!');
        }

        //Sudah registrasi
        $user = User::where('email',$request->email)->get();
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=> 'required'

        ]);

        if($user[0]->is_admin == false){
            if ($user[0]->is_verif){
                if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    return redirect()->intended('/');
                }
                return back()->with('loginError', 'Email/Password salah!');
            }elseif ($user[0]->is_verif == false && $user[0]->is_tolak ==false){
                return redirect('/login')->with('belumVerif', 'Akun anda belum terverifikasi');
            }elseif ($user[0]->is_tolak){
                return redirect('/login')->with('tolakLogin', 'Mohon Maaf Akun Anda Tidak Lolos Verifikasi');
            }
        }
        return back()->with('loginError', 'Email/Password salah!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}
