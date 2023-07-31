<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index(Request $request){
        $users = User::latest();

        if($request->search){
            $users->where('username', 'like','%'. $request->search  . '%');
        }

        return view('admin.homeAdmin',[
            'users' => $users->get()
        ]);
    }

    public function verif($id){
        $data = User::find($id);

        $data->is_verif = true;
        $data->save();
        return redirect('/admin/home');
    }

    public function tolak($id){
        $data = User::find($id);
        $data->is_tolak = true;
        $data->save();
        return redirect('/admin/home');
    }
}
