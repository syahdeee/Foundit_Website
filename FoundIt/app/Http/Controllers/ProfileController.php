<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('UserProfilePribadi', [
            "barangs" => Barang::where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function pengunjung($nim){      
        $user=User::where('nim', $nim)->get()[0];
        // dd($user);
        return view('UserProfilePengunjung',[
            "user" => $user,
            "barangs"=> Barang::where('user_id', $user->id )->get()
        ]);
    }

    public function show(User $user){
        // dd($user);
        return view('UserProfilePengunjung', [
            'user' => $user,
            "barangs"=> Barang::where('user_id', $user->id )->get()
        ]);
    }
}
