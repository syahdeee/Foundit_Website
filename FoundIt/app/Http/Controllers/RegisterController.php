<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            // 'name'=>'required|max:255',
            'username'=>['required','min:3','max:255', 'unique:users'],
            'nim' => 'required|unique:users',
            'email'=>'required|email:dns|unique:users',
            'nomor'=>'required|unique:users',
            'password'=> 'required|min:5|:max:255',
            'profil' =>'image|file|max:2048',
            'ktm' =>'image|file|max:2048'

        ]);


        if($request->file('ktm')&&$request->file('profil')){
            $validatedData['ktm'] = $request->file('ktm')->store('post-images');
            $validatedData['profil'] = $request->file('profil')->store('post-images');
            
        }

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['is_verif'] = false;
        $validatedData['is_tolak'] = false;
        $validatedData['is_admin'] = false;


        User::create($validatedData);

        // $request->session()->flash('success', 'Berhasil registrasi, silahkan login!');

        return redirect('/login')->with('success', 'Berhasil registrasi, silahkan login!');

    }
}
